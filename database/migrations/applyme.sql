-- migration ok
create table resume_base(
    id int auto_increment primary key,
    user_id bigint unsigned not null,
    foreign key (user_id) references users(id),
    nameresume varchar(30),
    aboutme longtext not null,
    photo text not null,
    positions json
    ) engine=innodb charset=utf8mb4;
-- migration ok
create table recruiters(
    id int unsigned auto_increment primary key,
    email varchar(50) unique not null,
    namerecruiter varchar(30) not null,
    surname varchar(70),
    phone varchar(20),
    active boolean default true
    ) engine=innodb charset=utf8mb4;
--
create table resume_curse(
    id int unsigned auto_increment primary key,
    resume_id int,
    foreign key(resume_id) references resume_base (id),
    cursename varchar(50),
    curse_start date,
    curse_end date,
    showcurse boolean default true
    ) engine=innodb charset=utf8mb4;

create table expirences(

) engine=innodb charset=utf8mb4;

-- migration ok
create table sites (
    id int unsigned auto_increment,
    primary key (id),
    sitename varchar(50) not null,
    sitelink text not null,
    descriptions text
) engine=innodb charset=utf8mb4;

-- migration ok
create table portifolio (
    id int unsigned auto_increment,
    primary key (id),
    user_id bigint unsigned not null,
    foreign key (user_id) references users(id),
    port_name varchar(30) not null,
    port_photo text not null,
    port_description text not null,
) engine=innodb charset=utf8mb4;

create table visits (
    id int unsigned auto_increment,
    primary key (id),
    resume_id int,
    foreign key(resume_id) references resume_base(id),
    source text,
    parms text
) engine=innodb charset=utf8mb4;
