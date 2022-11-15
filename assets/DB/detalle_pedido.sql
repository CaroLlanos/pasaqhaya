drop table if exists detalle_pedido;

create table detalle_pedido (
    id_pedido int not null, 
    id_producto int not null,
    nombre_producto varchar(50) not null,
    cantidad_producto int not null,
    precio_producto_unitario int not null,
    precio_producto_total int not null,

    primary key(id_pedido, id_producto),
    foreign key(id_pedido) references pedido(id_pedido),
    foreign key(id_producto) references producto(id_producto)
);

--GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO pasaqhaya_user;