<?php
require_once 'services/auth.php';
include_once 'services/str.php';

class Auth extends AuthService {
    public function register($db, $firstname, $lastname, $birthdate, $username, $password, $email) {
        $password = $this->hashPassword($password);
        $token = Str::random(60);
        $db->query("INSERT INTO users SET firstname = ?, lastname = ?, birthdate = ?, username = ?, password = ?, email = ?, role_id = 2, confirmation_token = ?", [
            $firstname, 
            $lastname, 
            $birthdate, 
            $username,
            $password, 
            $email, 
            $token
        ]);
        $user_id = $db->lastInsertId();
        mail($email, 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://localhost/projet4/confirm?action=confirm&id=$user_id&token=$token");         
    }

    public function confirm($db, $user_id, $token) {
        $user = $db->query('SELECT * FROM users WHERE id = ?', [$user_id])->fetch();

        if($user && $user->confirmation_token == $token) {  
            $db->query('UPDATE users SET confirmation_token = NULL, confirmed_at = NOW() WHERE id = ?', [$user_id]);
            $this->session->write('auth', $user);
            return true;
        }
        return false;
    }

    public function connectFromCookie($db) {
        if(isset($_COOKIE['remember']) && !AuthService::user()){
            $remember_token = $_COOKIE['remember'];
            $parts = explode('==', $remember_token);
            $user_id = $parts[0];
            $user = $db->query('SELECT * FROM users WHERE id = ?', [$user_id])->fetch();
            if($user){
                $expected = $user_id . '==' . $user->remember_token . sha1($user_id . 'ratonlaveurs');
                if($expected == $remember_token){
                    $this->connect($user);
                    setcookie('remember', $remember_token, time() + 60 * 60 * 24 * 7);
                } else{
                    setcookie('remember', null, -1);
                }
            }else{
                setcookie('remember', null, -1);
            }
        }
    }

    public function login($db, $username, $password, $remember = false) {
        //$user = $db->query('SELECT *, role.label AS "role_label" FROM users INNER JOIN role ON users.role_id = role.id WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL', ['username' => $username])->fetch();
        $user = $db->query('SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL', ['username' => $username])->fetch();
        if(password_verify($password, $user->password)) {
            $this->connect($user);
            if($remember) {
                $this->remember($db, $user->id);
            }
            return $user;
        } else {
            return false;
        }
    }

    public function remember($db, $user_id) {
        $remember_token = Str::random(250);
        $db->query('UPDATE users SET remember_token = ? WHERE id= ?', [$remember_token, $user_id]);
        setcookie('remember', $user_id . '==' . $remember_token . sha1($user_id . 'ratonlaveurs'), time() + 60 * 60 * 24 * 7);
    }

    public function resetPassword($db, $email) {
        $user = $db->query('SELECT * FROM users WHERE email = ? AND confirmed_at IS NOT NULL', [$email])->fetch();
        if($user){
            $reset_token = Str::random(60);
            $db->query('UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?', [$reset_token, $user->id]);
            $redirectLink = sprintf("http://localhost/projet4/reset?action=resetPassword&id=%s&token=%s", $user->id, $reset_token);
            mail($_POST['email'], 'Réinitiatilisation de votre mot de passe', "Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien ".$redirectLink);
            return $user;
        }
        return false;
    }

    public function checkResetToken($db, $user_id, $token) {
        return $db->query('SELECT * FROM users WHERE id = ? AND reset_token IS NOT NULL AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)', [$user_id, $token])->fetch();
    }

    public function updatePassword($password, $id) {
        global $db;

        $reqComments= $db->prepare('UPDATE users SET password = ? WHERE id = ?');
        $reqComments->execute(array($password, $id));
    }

    public function updatePasswordIsValid($password, $id) {
        global $db;

        $reqComments= $db->prepare('UPDATE users SET password = ?, reset_at = NULL, reset_token = NULL WHERE id = ?');
        $reqComments->execute(array($password, $id));
    }
}