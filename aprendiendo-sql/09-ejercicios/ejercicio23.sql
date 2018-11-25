# Listar los encargos realizados con la marca del coche y el nombre del cliente.

SELECT cl.nombre, co.marca FROM clientes cl
INNER JOIN encargos en ON en.cliente_id=cl.id
INNER JOIN coches co ON en.coche_id=co.id;

SELECT en.id, cl.nombre, co.marca FROM encargos en
INNER JOIN coches co ON co.id=en.coche_id
INNER JOIN clientes cl ON cl.id=en.cliente_id;