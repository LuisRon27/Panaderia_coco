CREATE DATABASE coco;

USE coco;

CREATE TABLE Usuarios (
    IDUsuario INT AUTO_INCREMENT PRIMARY KEY,
    Nombre NVARCHAR(100) NOT NULL,
    Apellido NVARCHAR(100) NOT NULL,
    Telefono VARCHAR(50),
    Email NVARCHAR(200),
    UserName NVARCHAR(100) NOT NULL,
    Password VARCHAR(50) NOT NULL,
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
    Comentarios TEXT,
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
INSERT INTO Usuarios (Nombre, Apellido, Telefono, Email, UserName, Password, Rol, Activo)
VALUES
    ('Luis', 'Ron', '1234567890', 'Luisron39@gmail.com','luisron27','12345678', 'admin', 1),
    ('Jesus', 'Sanchez', '9876543210', 'Jesus@example.com', 'jesus123','12345678', 'cliente', 1),
    ('Pedro', 'Ramirez', '5551237890', 'pedro@example.com', 'pedro123','12345678', 'cliente', 1);

-- Insertar datos de ejemplo en la tabla Categorias
INSERT INTO Categorias (Descripcion, ImagenURL, Activo)
VALUES
    ('Dulces', 'https://acdn.mitiendanube.com/stores/001/832/218/themes/new_linkedman/img-1943567921-1630687800-aab3c2324f58e25efdf74f7b3f48324a1630687800.jpg?641626093', 1),
    ('Salados', 'https://acdn.mitiendanube.com/stores/001/832/218/themes/new_linkedman/img-607820455-1629836499-9b53393e604bcbbfec70e628223116441629836500.png?641626093', 1);

-- Insertar datos de ejemplo en la tabla Productos
INSERT INTO Productos (IDCategoria, Nombre, Descripcion, Precio, Stock, Activo, ImagenURL)
VALUES
    (1, 'Facturas', 'FACTURAS SURTIDAS X 6 UNIDADES', 1860, 50, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-561-c65927ffd1e2cc53b616472858337995-1024-1024.webp'),
    (2, 'Empanadas', 'Empanadas de carne, pollo y verdura', 680, 100, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-211-c076714172ed5d36e016475263521709-1024-1024.webp'),
    (1, 'Medialuna', 'Medialuna de manteca x6 unidades', 1860, 100, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-541-8b46cfa474dfe109bc16472855365426-1024-1024.webp'),
    (1, 'Mini brownie', 'Mini brownie tradicional x15 unidades 250grs', 1675, 100, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-611-03e968e0c5dc78f38516475232020546-1024-1024.webp'),
    (2, 'Sandwiches', ' Sandwiches de miga especiales (II) x6 unidades', 5700, 100, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-6821-678f8cd5cf546d07d616503943367650-1024-1024.webp'),
    (2, 'Pan de molde', 'Pan de molde salvado con semillas', 1300, 100, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-841-6ec7e1e2297acb831116472868241724-1024-1024.webp'),
    (1, 'Masas', 'Masas secas x500grs', 3800, 100, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-631-03bace0f43c8f432ee16475242170955-1024-1024.webp'),
    (1, 'Muffins', 'Muffins de vainilla, banana y chocolate', 600, 100, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-451-68ed8bd89fcb027f3216475232758439-1024-1024.webp'),
    (1, 'Torta Oreo', 'Base de chocolate, dulce de leche y crema de galletitas Oreo', 9200, 5, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-81-a55df1b69ec436617216472903183861-1024-1024.webp'),
	(2, 'Zeppelin masa madre', 'Pan de alta hidratación con masa madre y harina integral.', 1100, 20, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-861-1f5c05fbfaa47adf2916497709660845-1024-1024.webp'),
    (2, 'Tarta de jamón y queso', 'jamón cocido, queso danbo, mozzarella, leche, queso crema y huevo', 2450, 20, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-751-9b46add5736faa564116498778813272-1024-1024.webp'),
    (2, 'Bocados salados', 'Bocados de Jamón, Crudo, Lomito y Matambre', 770, 75, 1, 'https://acdn.mitiendanube.com/stores/001/990/174/products/la-1x1-341-ffad871744a831877816485802795478-1024-1024.webp');

-- Insertar datos de ejemplo en la tabla Carrito
INSERT INTO Carrito (IDUsuario, IDProducto, Cantidad, Comentarios)
VALUES
    (2, 1, 2, 'Facturas con Dulce de leche'),
    (2, 3, 4, 'Medialunas Calientes');

-- Insertar datos de ejemplo en la tabla Pedidos
INSERT INTO Pedidos (IDCarrito, DireccionEntrega, MetodoPago, EstadoPedido)
VALUES
    (1, 'Calle 789, Ciudad', 'MercadoPago', 'Pendiente'),
    (2, 'Avenida 123, Ciudad', 'Efectivo', 'Entregado');

-- Insertar datos de ejemplo en la tabla Inventario
INSERT INTO Inventario (Nombre, Cantidad, FechaVencimiento, Descripcion)
VALUES
    ('Levadura', 25, '2023-11-30', 'Levadura fresca para panadería'),
    ('Chocolate', 40, '2023-10-15', 'Chocolate negro de alta calidad'),
    ('Leche', 75, '2024-01-15', 'Leche entera pasteurizada'),
    ('Café', 60, '2024-03-01', 'Café molido premium'),
    ('Aceite de Oliva', 15, '2024-05-20', 'Aceite de oliva virgen extra');