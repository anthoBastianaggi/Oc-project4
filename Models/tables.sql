CREATE TABLE if not exists `users` (
    id integer AUTO_INCREMENT,
    login VARCHAR(255) NOT NULL,
    password VARCHAR(50) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    PRIMARY KEY(id),
    role_id integer NOT NULL,
    FOREIGN KEY (role_id) REFERENCES role(id),
    registrated_at DATETIME NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE `role` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(20) NOT NULL
)

CREATE TABLE `ticket` (
    id integer AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL,
    PRIMARY KEY(id),
    user_id integer NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE `comment` (
    id integer AUTO_INCREMENT,
    ticket_id integer NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (ticket_id) REFERENCES ticket(id),
    user_id integer NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id),
    content TEXT NOT NULL,
    created_at DATETIME NOT NULL,
    deleted_at DATETIME NULL
);

CREATE TABLE `report` (
    id integer AUTO_INCREMENT,
    PRIMARY KEY(id),
    user_id integer NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id),
    comment_id integer NOT NULL,
    FOREIGN KEY (comment_id) REFERENCES comment(id)
);

CREATE TABLE `message` (
    id integer AUTO_INCREMENT,
    PRIMARY KEY(id),
    user_id integer NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id),
    subject VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    sended_at DATETIME NOT NULL
);