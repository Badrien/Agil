drop table if exists t_questions;
create table t_questions (
id integer not null primary key auto_increment,
question_text varchar(600) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
