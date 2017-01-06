drop table if exists t_offers;
create table t_offers (
id integer not null primary key auto_increment,
title varchar(100) not null,
content varchar(2000) not null,
date_publication datetime not null DEFAULT CURRENT_TIMESTAMP,
region  varchar(140) not null,
intern_level varchar(50),
intern_date datetime,
intern_duration varchar(250)
) engine=innodb character set utf8 collate utf8_unicode_ci;
