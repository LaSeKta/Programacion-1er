
CREATE DATABASE sigen;

USE sigen;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL UNIQUE,
    password VARCHAR(25) NOT NULL
);

INSERT INTO usuarios (username, password) VALUES ('admin', '1234');
