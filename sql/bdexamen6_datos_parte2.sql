USE examen6db;

-- Eliminar datos anteriores
DELETE FROM order_details;
ALTER TABLE order_details AUTO_INCREMENT = 1;

DELETE FROM orders;
ALTER TABLE orders AUTO_INCREMENT = 1;

DELETE FROM products;
ALTER TABLE products AUTO_INCREMENT = 1;

DELETE FROM companies;
ALTER TABLE companies AUTO_INCREMENT = 1;


-- Insertar empresas
INSERT INTO companies (name, contact_info) VALUES
('TechCorp', 'techcorp@example.com'),
('AgroSupply', 'agrosupply@example.com'),
('MediHealth', 'medihealth@example.com'),
('BuildIt', 'buildit@example.com'),
('EduTools', 'edutools@example.com');

-- Insertar productos para TechCorp (Sector Tecnológico)
INSERT INTO products (name, description, price, company_id) VALUES
('Laptop X1', 'Portátil de alto rendimiento', 1200.00, 1),
('Smartphone Pro', 'Último modelo de smartphone', 800.00, 1),
('Ratón Inalámbrico', 'Ratón ergonómico inalámbrico', 29.99, 1),
('Teclado Mecánico', 'Teclado de alta durabilidad', 12.75, 1),
('Monitor de Gaming', 'Monitor de gaming 4K UHD', 400.00, 1);

-- Insertar productos para AgroSupply (Sector Agrícola)
INSERT INTO products (name, description, price, company_id) VALUES
('Tractor A1', 'Tractor agrícola avanzado', 15000.00, 2),
('Sistema de Riego', 'Sistema de riego automatizado', 5000.00, 2),
('Fertilizante X', 'Fertilizante de alta eficiencia', 300.00, 2),
('Pack de Semillas', 'Pack de semillas orgánicas', 9.99, 2),
('Pesticida Y', 'Pesticida ecológico', 15.55, 2),
('Kit de Invernadero', 'Kit completo de invernadero', 8000.00, 2);

-- Insertar productos para MediHealth (Sector Médico)
INSERT INTO products (name, description, price, company_id) VALUES
('Estetoscopio', 'Estetoscopio profesional', 55.55, 3),
('Guantes Quirúrgicos', 'Guantes quirúrgicos estériles', 0.15, 3),
('Termómetro', 'Termómetro digital', 23.17, 3),
('Monitor de Presión Arterial', 'Monitor de presión arterial automático', 217.83, 3),
('Máquina de Ultrasonido', 'Máquina de ultrasonido portátil', 10000.00, 3);

-- Insertar productos para BuildIt (Sector de Construcción)
INSERT INTO products (name, description, price, company_id) VALUES
('Mezcladora de Concreto', 'Mezcladora de concreto de alta capacidad', 3000.00, 4),
('Paleta de Albañil', 'Paleta de acero inoxidable', 15.25, 4),
('Taladro Eléctrico', 'Taladro eléctrico inalámbrico', 150.50, 4),
('Casco de Seguridad', 'Casco de seguridad de alta protección', 49.99, 4),
('Guantes de Construcción', 'Guantes de construcción duraderos', 15.00, 4),
('Carretilla', 'Carretilla resistente', 60.00, 4);

-- EduTools (Sector Educativo) no tiene productos

-- Insertar pedidos
INSERT INTO orders (order_date, company_id) VALUES
('2025-01-15', 1),
('2025-01-16', 2),
('2025-01-17', 3),
('2025-01-18', 1),
('2025-01-19', 4);

-- Insertar detalles de pedidos
INSERT INTO order_details (order_id, product_id, quantity, current_price) VALUES
(1, 1, 10, 1800.00), -- Pedido de 10 Laptop X1
(1, 2, 5, 799.99),   -- Pedido de 5 Smartphone Pro
(2, 7, 3, 14000.00), -- Pedido de 3 Tractor A1
(2, 8, 10, 4700.00), -- Pedido de 10 Sistema de Riego
(3, 14, 20, 80.80), -- Pedido de 20 Estetoscopio
(3, 15, 100, 20.00), -- Pedido de 100 Guantes Quirúrgicos
(4, 1, 2, 1500.00),  -- Pedido de 2 Laptop X1
(5, 19, 50, 13.99),  -- Pedido de 50 Paleta de Albañil
(5, 21, 30, 50.00);  -- Pedido de 30 Casco de Seguridad
