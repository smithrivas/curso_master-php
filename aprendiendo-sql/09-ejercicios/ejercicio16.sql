# Listado de clientes atendidos por el vendedor David Lopez

SELECT CONCAT(v.nombre, v.apellidos) AS 'Vendedor',  c.nombre AS 'Clientes atendidos' FROM vendedores v 
INNER JOIN clientes c ON v.id=c.vendedor_id;

SELECT * FROM clientes WHERE vendedor_id = 
(SELECT id FROM vendedores WHERE nombre='David' AND apellidos='Lopez');