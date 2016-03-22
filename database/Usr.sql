create user 'weblogin'@'localhost' identified by '17883146';
create database TeamWeb;
grant all privileges on TeamWeb.* to weblogin@localhost identified by '17883146';
flush privileges;
use TeamWeb;

DROP TABLE IF EXITS Usr_info;
CREATE TABLE Usr_info (
    id int(10) NOT NULL,
    name varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    passwd varchar(50) NOT NULL,
    tel bigint(11) DEFAULT 0,
    department varchar(50) DEFAULT 'нч',
    ismanager boolean DEFAULT false,
    credits int(5) DEFAULT 0,
    PRIMARY KEY (id)
)ENGINE=innodb DEFAULT CHARSET=utf8;

DROP TABLE IF EXITS Group_info;
CREATE TABLE Group_info (
    id int(5) NOT NULL,
    name varchar(50) DEFAULT '//',
    teampath varchar(50) NOT NULL,
    PRIMARY KEY (id)
)ENGINE=innodb DEFAULT CHARSET=utf8;

DROP TABLE IF EXITS Member;
CREATE TABLE Member (
    groupID int(5) NOT NULL,
    usrID int(10) NOT NULL,
    IsLeader boolean DEFAULT false,
    FOREIGN KEY (groupID) references Group_info(id) on delete cascade on update cascade,
    FOREIGN KEY (usrID) references Usr_info(id) on delete cascade on update cascade
)ENGINE=innodb DEFAULT CHARSET=utf8;

DROP TABLE IF EXITS MailList;
CREATE TABLE MailList (
    id int(10) NOT NULL,
    name varchar(50) NOT NULL,
    mail varchar(50) NOT NULL,
    _group int(5) DEFAULT 0,
    checked boolean DEFAULT false,
    PRIMARY KEY (mail)
)ENGINE=innodb DEFAULT CHARSET=utf8;
