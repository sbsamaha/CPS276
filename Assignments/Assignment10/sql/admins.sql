CREATE TABLE admin (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(250) NOT NULL ,
    email varchar(250) NOT NULL ,
    password varchar(250) NOT NULL ,
    status varchar(250) NULL,
    PRIMARY KEY(id)
)ENGINE=InnoDB;