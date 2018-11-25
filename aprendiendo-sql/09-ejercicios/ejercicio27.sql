/* 
visualizar los nombres de los clientes y cantidad de encargos realizados
incluyendo los que no hayan realizado encargos.
*/

INSERT INTO clientes VALUES(NULL,5,'Tienda Organica Inc','Murcia',0,CURDATE());

SELECT cl.nombre, en.cantidad FROM clientes cl
INNER JOIN encargos en ON cl.id=en.cliente_id;

SELECT cl.nombre, COUNT(en.id) AS 'Encargos' FROM clientes cl
LEFT JOIN encargos en ON cl.id=en.cliente_id
GROUP BY 1;
