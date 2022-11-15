drop table if exists pedido;

create table pedido (
    id_pedido int not null,
    id_cliente int not null,
    nombre_cliente varchar(64) not null,
    apellido_cliente varchar(64) not null,
    direccion_cliente varchar(100) not null,
    direccion_entrega varchar(100) not null,
    fecha_pedido date not null,
    fecha_entrega date not null,
    total_pago int not null,
    forma_pago varchar(255) not null,
    estado_pago boolean not null,
    estado_compra boolean not null,

    primary key(id_pedido),
    foreign key(id_cliente) references cliente(id_cliente)

);

--GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO pasaqhaya_user;