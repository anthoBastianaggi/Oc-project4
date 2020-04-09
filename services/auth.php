<?php
require_once 'views/includes/bootstrap.php'; 

class AuthService {
    protected $options = [
        'restriction_msg' => "Vous n'avez pas le droit d'accéder à cette page."
    ];

    protected $session;

    public function __construct($session, $options = []) {
        $this->options = array_merge($this->options, $options);
        $this->session = $session;
    }

    public function hashPassword($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function restrict() {
        if(!$this->session->read('auth')) {
            $this->session->setFlash('danger', $this->options['restriction_msg']);
            header('Location: /projet4/login?action=login');
            exit();
        }
    }

    public function user() {
        if(!$this->session->read('auth')) {
            return false;
        }
        return $this->session->read('auth');
    }

    public function connect($user) {
        $this->session->write('auth', $user);
    }

    public function logout() {
        setcookie('remember', NULL, -1);
        $this->session->delete('auth');
    }

    static function isAuthenticated() {
        if($_SESSION['auth']) {
            return true;
        } else {
            Session::getInstance()->setFlash('danger', "Vous n'avez pas accès à cette page. Veuillez vous connecter.");
            App::redirect('/projet4/login?action=login');
        }
    }
    
    static function is_role_admin() {
        if(AuthService::isAuthenticated() && $_SESSION['auth']->role_id === "1") {
            return true;
        }
        Session::getInstance()->setFlash('danger', "Vous n'avez pas accès à cette page.");
        return false;
    }
}