CREATE DATABASE coco;

USE coco;

CREATE TABLE Usuarios (
    IDUsuario INT AUTO_INCREMENT PRIMARY KEY,
    Nombre NVARCHAR(100) NOT NULL,
    Apellido NVARCHAR(100) NOT NULL,
    Telefono VARCHAR(50),
    Email NVARCHAR(200),
    Password VARCHAR(50) NOT NULL,
    Direccion NVARCHAR(200),
    Rol ENUM('admin', 'empleado', 'cliente') NOT NULL,
    Activo TINYINT(1) NOT NULL,
    FechaCreacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Categorias (
    IDCategoria INT AUTO_INCREMENT PRIMARY KEY,
    Descripcion NVARCHAR(200) NOT NULL,
    ImagenURL TEXT, 
    Activo TINYINT(1) NOT NULL
);

CREATE TABLE Productos (
    IDProducto INT AUTO_INCREMENT PRIMARY KEY,
    IDCategoria INT,
    Nombre NVARCHAR(200) NOT NULL,
    Descripcion TEXT,
    Precio FLOAT,
    Stock INT, 
    Activo TINYINT(1) NOT NULL,
    FechaCreacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ImagenURL TEXT
);

CREATE TABLE Carrito (
    IDCarrito INT AUTO_INCREMENT PRIMARY KEY,
    IDUsuario INT,
    IDProducto INT,
    Cantidad INT,
    FOREIGN KEY (IDUsuario) REFERENCES Usuarios(IDUsuario),
    FOREIGN KEY (IDProducto) REFERENCES Productos(IDProducto)
);

CREATE TABLE Pedidos (
    IDPedido INT AUTO_INCREMENT PRIMARY KEY,
    IDCarrito INT,
    FechaPedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    DireccionEntrega NVARCHAR(200) NOT NULL,
    MetodoPago ENUM('MercadoPago', 'Efectivo') NOT NULL,
    EstadoPedido ENUM('Pendiente', 'Entregado') NOT NULL,
    FOREIGN KEY (IDCarrito) REFERENCES Carrito(IDCarrito)
);

CREATE TABLE Inventario (
    IDInventario INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Cantidad INT,
    FechaVencimiento DATE,
    Descripcion TEXT
);


-- Insertar datos de ejemplo en la tabla Usuarios
INSERT INTO Usuarios (Nombre, Apellido, Telefono, Email, Password, Direccion, Rol, Activo)
VALUES
    ('Juan', 'Pérez', '1234567890', 'juan@example.com', 'contrasena123', 'Calle 123, Ciudad', 'admin', 1),
    ('María', 'González', '9876543210', 'maria@example.com', 'clave456', 'Avenida 456, Ciudad', 'cliente', 1),
    ('Pedro', 'Ramírez', '5551237890', 'pedro@example.com', 'pass789', 'Calle Principal, Ciudad', 'cliente', 1);

-- Insertar datos de ejemplo en la tabla Categorias
INSERT INTO Categorias (Descripcion, ImagenURL, Activo)
VALUES
    ('Dulces', 'imagen_dulces.jpg', 1),
    ('Salados', 'imagen_salados.jpg', 1);

-- Insertar datos de ejemplo en la tabla Productos
INSERT INTO Productos (IDCategoria, Nombre, Descripcion, Precio, Stock, Activo, ImagenURL)
VALUES
    (1, 'Torta de Chocolate', 'Deliciosa torta de chocolate', 15.99, 50, 1, 'imagen_torta_chocolate.jpg'),
    (1, 'Croissant', 'Crujiente croissant recién horneado', 2.49, 100, 1, 'imagen_croissant.jpg'),
    (2, 'Empanada de Carne', 'Rica empanada rellena de carne', 1.99, 75, 1, 'imagen_empanada_carne.jpg');

-- Insertar datos de ejemplo en la tabla Carrito
INSERT INTO Carrito (IDUsuario, IDProducto, Cantidad)
VALUES
    (2, 1, 2),
    (2, 3, 4);

-- Insertar datos de ejemplo en la tabla Pedidos
INSERT INTO Pedidos (IDCarrito, DireccionEntrega, MetodoPago, EstadoPedido)
VALUES
    (1, 'Calle 789, Ciudad', 'MercadoPago', 'Pendiente'),
    (2, 'Avenida 123, Ciudad', 'Efectivo', 'Entregado');

-- Insertar datos de ejemplo en la tabla Inventario
INSERT INTO Inventario (Nombre, Cantidad, FechaVencimiento, Descripcion)
VALUES
    ('Harina', 100, '2023-12-31', 'Harina de trigo de alta calidad'),
    ('Azúcar', 50, '2024-06-30', 'Azúcar refinado de caña'),
    ('Mantequilla', 30, '2024-02-28', 'Mantequilla fresca');
