CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(45), 
    email VARCHAR(20) UNIQUE NOT NULL, 
    phone VARCHAR(15), 
    photo BLOB, 
    pass VARCHAR(120)

);