# Clientes que han hecho encargo de coche 'Mercedes Ranchera'
 
SELECT nombre FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id=3);

SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id IN
(SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));