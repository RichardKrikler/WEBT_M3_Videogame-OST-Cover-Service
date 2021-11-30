DROP DATABASE IF EXISTS OSTS;
CREATE DATABASE OSTS CHARACTER SET utf8 COLLATE utf8_general_ci;
USE OSTS;

CREATE TABLE OST
(
    id          INTEGER NOT NULL PRIMARY KEY,
    name        VARCHAR(255),
    gameName    VARCHAR(255),
    releaseYear CHAR(4)
);

CREATE TABLE Track
(
    id           INTEGER NOT NULL PRIMARY KEY,
    name         VARCHAR(255),
    artist       VARCHAR(255),
    trackNumber  INTEGER,
    duration     FLOAT,
    fk_pk_ost_id INTEGER NOT NULL
);

ALTER TABLE Track
    ADD FOREIGN KEY (fk_pk_ost_id) REFERENCES OST (id);
