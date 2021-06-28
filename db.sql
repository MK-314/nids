DROP DATABASE if EXISTS snort;
CREATE DATABASE snort;
USE snort;

CREATE TABLE snort_table (
id serial,
   user VARCHAR(255),
   password VARCHAR(255),
   PRIMARY KEY(id)
);
INSERT INTO `snort`.`snort_table` (`user`, `password`) VALUES ('Niki', '123');
INSERT INTO `snort`.`snort_table` (`user`, `password`) VALUES ('John', '1234');

-- ' or 1=1; --