CREATE DATABASE IF NOT EXISTS laravel_master;
USE laravel_master;


CREATE TABLE users (
id          int (255) auto_increment NOT null,
role        varchar (20),
name        varchar (100),
surname     varchar (200),
nick        varchar (100),
email       varchar (255),
password    varchar (255),
image       varchar (255),
created_at  datetime,
updated_at  datetime,
remember_token varchar(255),
CONSTRAINT pk_users PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE images (
id          int (255) auto_increment NOT null,
user_id     int (255),
image_path  varchar (255),
description text,
created_at  datetime,
updated_at  datetime,
CONSTRAINT pk_images PRIMARY KEY (id),
CONSTRAINT fk_images_user FOREIGN KEY (user_id) REFERENCES users(id)
)ENGINE=InnoDb;
