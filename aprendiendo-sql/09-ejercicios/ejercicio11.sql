# Todos los cargos de los vendedores  el número de vendedores en el cargo.

SELECT cargo, COUNT(id) AS 'Número de vendedores' FROM vendedores GROUP BY cargo ORDER BY COUNT(id) DESC;