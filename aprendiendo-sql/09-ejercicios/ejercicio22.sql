# Listado de clientes mostrando(número y nombre del cliente), también número del vendedor y el nombre.

SELECT c.id,c.nombre,c.vendedor_id,CONCAT(v.nombre,' ',v.apellidos) AS 'Nombre vendedor' FROM clientes c
INNER JOIN vendedores v ON c.vendedor_id=v.id;

SELECT c.id,c.nombre,c.vendedor_id,CONCAT(v.nombre,' ',v.apellidos) AS 'Nombre vendedor' 
FROM clientes c, vendedores v
WHERE c.vendedor_id=v.id;