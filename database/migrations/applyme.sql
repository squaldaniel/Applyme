-- migration ok
create table recruiters(
    id int unsigned auto_increment primary key,
    email varchar(50) unique,
    namerecruiter varchar(30),
    surname varchar(70),
    phone varchar(20),
    active boolean default true
    ) engine=innodb charset=utf8mb4;
-- migration ok
create table resume_base(
    id int auto_increment primary key,
    nameresume varchar(30)
    ) engine=innodb charset=utf8mb4;
--
create table resume_curse(
    id int unsigned auto_increment primary key,
    resume_id int,
    foreign key(resume_id) references resume (id),
    cursename varchar(50),
    curse_start date,
    curse_end date,
    show boolean default true
    ) engine=innodb charset=utf8mb4;
create table expirences()


