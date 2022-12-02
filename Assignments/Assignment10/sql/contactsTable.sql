
CREATE TABLE contactsTable (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(250) NOT NULL ,
    address varchar(250) NOT NULL ,
    city varchar(250) NOT NULL,
    state varchar(250) NOT NULL ,
    phone varchar(250) NOT NULL ,
    email varchar(250) NOT NULL ,
    dob varchar(250) NOT NULL ,
    contactType varchar(250)  NULL,
    age varchar(250)  NULL,
    PRIMARY KEY(id)
)ENGINE=InnoDB;