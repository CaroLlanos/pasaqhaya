drop table if exists cliente;

create table cliente (
    id_cliente int not null,
    cinit int not null,
    nombre varchar(64) not null,
    apellido varchar(64) not null,
    email varchar(25) not null,
    contrasena varchar(25) not null,
    ciudad varchar(25) not null,
    telefono int not null,
    direccion varchar(100) not null,
    estado boolean not null,

    primary key(id_cliente)
);

--insert into usuario (nombre, clave, rol) values ();


--GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO pasaqhaya_user;
