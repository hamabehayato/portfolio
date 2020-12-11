CREATE DATABASE register_func DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE register_func. users (
    user_id INT (5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25) NOT NULL,
    email VARCHAR(35) NOT NULL,
    password VARCHAR(60) NOT NULL,
    UNIQUE(email)
);