drop database if exists pasaqhaya;

create database pasaqhaya;

grant all privileges on pasaqhaya.* to pasaqhaya@'%' identified by 'password';

flush PRIVILEGES;