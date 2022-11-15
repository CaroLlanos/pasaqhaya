drop table if exists producto;

create table producto (
    id_producto int not null,
    nombre varchar(50) not null,
    descripcion varchar(255) not null,
    tipo varchar(255) not null,
    precio int(25) not null,
    imagen varchar(50),

    primary key(id_producto)

);

--GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO pasaqhaya_user;