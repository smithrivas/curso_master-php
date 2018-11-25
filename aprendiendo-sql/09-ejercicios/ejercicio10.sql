# Apellidos de vendedores, su fecha y su número de grupo ordenados por fecha descendente y mostrar los 4 últimos.

SELECT apellidos, fecha, grupo_id FROM vendedores ORDER BY fecha DESC LIMIT 4;