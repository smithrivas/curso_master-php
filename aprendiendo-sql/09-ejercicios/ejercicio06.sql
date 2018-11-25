# Nombre y apellidos de los vendedores en una misma columna, fecha de registro y día de la semana del registro.

SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre completo', fecha AS 'Fecha de registro', DAYNAME(fecha) AS 'Día de registro' FROM vendedores;