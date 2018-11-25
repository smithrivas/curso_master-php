# Vendedores con 2 o más clientes

# Vendedores que tienen clientes
SELECT * FROM vendedores WHERE id IN
(SELECT vendedor_id FROM clientes);

SELECT * FROM vendedores WHERE id IN
(SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2);

