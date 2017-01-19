drop table if exists t_candidates;
create table t_candidates (
id integer not null primary key auto_increment,
last_name varchar(100) not null,
first_name varchar(50) not null,
email varchar(100) not null,
cv_file varchar(400),
video_file varchar(400),
id_q1 integer,
id_q2 integer,
id_q3 integer
) engine=innodb character set utf8 collate utf8_unicode_ci;
