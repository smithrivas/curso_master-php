/* 
Mostrar todos lo vendedores tengan o no clientes, numero de clientes.
*/

SELECT CONCAT(ve.nombre,' ',ve.apellidos) AS 'Vendedores', COUNT(cl.vendedor_id) AS 'Clientes' FROM vendedores ve
LEFT JOIN clientes cl ON ve.id=cl.vendedor_id
GROUP BY 1;

SELECT CONCAT(ve.nombre,' ',ve.apellidos) AS 'Vendedores', COUNT(cl.id) AS 'Clientes' FROM vendedores ve
LEFT JOIN clientes cl ON ve.id=cl.vendedor_id
GROUP BY ve.id;