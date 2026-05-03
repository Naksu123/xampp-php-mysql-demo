CREATE DATABASE demo_db;
USE demo_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);

INSERT INTO users (name, email) VALUES
('Juan', 'juan@email.com'),
('Maria', 'maria@email.com'),
('Pedro', 'pedro@email.com'),
('Ana', 'ana@email.com'),
('Luis', 'luis@email.com'),
('Carla', 'carla@email.com'),
('Jose', 'jose@email.com'),
('Elena', 'elena@email.com');