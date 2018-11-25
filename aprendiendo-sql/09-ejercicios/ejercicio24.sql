/*
Listar los encargos con el nombre del coche, 
el nombre del cliente y el nombre de la ciudad, 
pero unicamente cuando sean de barcelona.
*/

SELECT co.modelo, cl.nombre, cl.ciudad FROM encargos en, coches co, clientes cl
WHERE cl.ciudad='Barcelona' GROUP BY co.modelo;

SELECT en.id, co.modelo, cl.nombre, cl.ciudad FROM encargos en
INNER JOIN coches co ON co.id = en.coche_id
INNER JOIN clientes cl ON cl.id = en.cliente_id
WHERE cl.ciudad='Barcelona';