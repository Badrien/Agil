drop table if exists t_candidatures;
create table t_candidatures (
id integer not null primary key auto_increment,
offer_id integer,
candidate_id integer not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
