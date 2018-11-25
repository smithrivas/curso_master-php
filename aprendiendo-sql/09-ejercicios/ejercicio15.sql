# Mostrar los clientes que más pedidos han hecho y mostrar cuantos hicieron.

SELECT cliente_id, COUNT(id) FROM encargos GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;

INSERT INTO encargos VALUES(null, 4, 4, 3, CURDATE());

SELECT e.cliente_id, cl.nombre AS 'Nombre cliente', COUNT(e.id) FROM encargos e
INNER JOIN clientes cl ON e.cliente_id=cl.id
GROUP BY e.cliente_id ORDER BY 3 DESC LIMIT 2;