drop table if exists receta;

create table receta (
    id_receta int not null,
    titulo varchar(50) not null,
    contenido varchar(1025) not null,
    imagen varchar(255) not null,

    primary key(id_receta)
);

--GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO pasaqhaya_user;