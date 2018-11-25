# Obtener un listado con los encargos realizados por cliente 'Fruteria antonia INC'.

SELECT e.id AS 'N° de encargo', e.cantidad, c.nombre, co.modelo, e.fecha AS 'Encargos' FROM encargos e
INNER JOIN clientes c ON e.cliente_id = c.id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN
(SELECT id FROM clientes WHERE nombre = 'Frutería Antonia');