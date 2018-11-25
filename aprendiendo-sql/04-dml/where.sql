/*
OPERADORES DE COMPARACION
igual   =
distinto !=
menor <
mayor >
menor o igual <=
mayor o igual >=
entre   between A and B
en  in
es nulo is null
no nulo is not null
como    like
no es como  not like

OPERADORES LOGICOS
O = OR
Y = AND
NO = NOR

COMODINES
cualquier cantidad de caracteres: %
Un caracter desconocido: _
*/

# EJEMPLOS
# NOmbre y apellidos de todos los usuarios registrados en 2019.
SELECT nombre,apellidos,fecha FROM usuarios WHERE YEAR(fecha) = 2019;

# Usuarios que no se registraron en 2019.
SELECT nombre,apellidos,fecha FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

# Apellidos que contenga la letra "a".
SELECT nombre,apellidos FROM usuarios WHERE apellidos like '%a%';
SELECT nombre,apellidos FROM usuarios WHERE apellidos like '%a%' AND password = 'lau123';

# Mostrar usuarios que se hayan registrado en un año par.
SELECT nombre,apellidos FROM usuarios WHERE (YEAR(fecha)%2 = 0);
# Impar
SELECT nombre,apellidos FROM usuarios WHERE (YEAR(fecha)%2 != 0);

# registros cuyo nombre tenga más de 5 letras, que se hayan registrado antes del 2020 y mostrar nombre en mayuscula
SELECT UPPER(nombre) AS 'Nombre',apellidos FROM usuarios WHERE (YEAR(fecha)<2021) AND (LENGTH(nombre)>5);

# Ordenar registros consultados
SELECT * FROM usuarios ORDER BY id;
SELECT * FROM usuarios ORDER BY id ASC;
SELECT * FROM usuarios ORDER BY id DESC;

# Consular registros con límite de registros
SELECT * FROM usuarios LIMIT 2;
# Consulta dese hasta
SELECT * FROM usuarios LIMIT 2,3;