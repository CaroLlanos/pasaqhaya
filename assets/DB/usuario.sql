drop table if exists usuario;

create table usuario (
    id_usuario int not null,
    nombre varchar(64) not null,
    apellido varchar(64) not null,
    email varchar(25) not null,
    contrasena varchar(25) not null,
    ciudad varchar(25) not null,
    telefono int not null,
    estado boolean not null,
    rol varchar(25) not null,
    ultima_fecha_conectado datetime not null,

    primary key(id_usuario)
);

--insert into usuario (nombre, clave, rol) values ();


--GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO pasaqhaya_user;
