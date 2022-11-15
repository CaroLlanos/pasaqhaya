drop table if exists catalogo;

create table catalogo (
    id_catalogo int not null,
    nombre varchar(255) not null,

    primary key(id_catalogo)
);

--GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO pasaqhaya_user;