-- liquibase formatted sql


--changeset example:item:01

create table senha (
    id bigserial primary key,
    email varchar(255),
    token varchar(255),
    criado timestamp default now()
);
