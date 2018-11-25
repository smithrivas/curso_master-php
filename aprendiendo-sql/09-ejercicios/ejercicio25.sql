/* 
Obtener lista de los clientes con el importe de sus acumulados.
 */

SELECT cl.nombre, SUM(co.precio*en.cantidad) AS "Importe"
FROM clientes cl
INNER JOIN encargos en ON cl.id=en.cliente_id
INNER JOIN coches co ON en.coche_id=co.id
GROUP BY cl.nombre
ORDER BY 2 ASC;
