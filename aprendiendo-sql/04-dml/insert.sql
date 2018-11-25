# INSERTAR NUEVOS REGISTROS #
INSERT INTO usuarios VALUES(null, 'Brayan', 'Rivas', 'smith@93.com', 'toby123', '2019-05-01');
INSERT INTO usuarios VALUES(null, 'Laura', 'Vargas', 'lau@0000.com', 'lau123', '2019-09-21');
INSERT INTO usuarios VALUES(null, 'Nelcy', 'Bustos', 'nelcy@1976.com', 'emi123', '2022-03-01');

# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS #
INSERT INTO usuarios(email, password) VALUES('admin@admin.com', 'admin');

# MOSTRAR TODOS REGISTROS / FILAS DE UNA TABLA #
SELECT email, nombre, apellidos FROM usuarios;

# MOSTRAR TODOS LOS CAMPOS #
SELECT * FROM usuarios;

# MOSTRAR REGISTROS EN MAYUSCULA #
SELECT UPPER(nombre) FROM usuarios;

# MOSTRAR REGISTROS EN MINUSCULA #
SELECT UPPER(nombre) FROM usuarios;

# CONCATENAR REGISTROS #
SELECT CONCAT(nombre,' ',apellidos) FROM usuarios;

# CONCATENAR REGISTROS CON ALIAS #
SELECT CONCAT(nombre,' ',apellidos) AS 'CONVERSION' FROM usuarios;

# CANTIDAD DE CARACTERES #
SELECT LENGTH(nombre) FROM usuarios;

# BORRA LOS ESPACIOS AL INICIO Y AL FINAL #
SELECT TRIM('   ',CONCAT(nombre, '       ',apellidos,'           ')) AS 'RESULT' FROM usuarios;

# FECHA ACTUAL #
SELECT nombre, fecha, CURDATE() AS 'FECHA ACTUAL' from usuarios;

# DIFERENCIA ENTRE 2 FECHAS #
SELECT nombre, DATEDIFF(fecha, CURDATE()) AS 'DIF DE DIAS' from usuarios;

# NOMBRE DEL DIA #
SELECT nombre, DAYNAME(fecha) AS 'DIA' FROM usuarios;
# DAYMONTH = Día del mes
# DAYWEEK = Día de la semana
# DAY = Día de la fecha
# MONTH = Mes de fecha
# YEAR = Año de la fecha
# CURTIME() = hora actual
# SYSDATE() = Fecha y hora delSo o server

# DATE_FORMAT()
SELECT nombre, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;
# %Y = Muestra el año completo
# %y = Muestra2 últimos dígitos del año
# %M = Muestra el nombre del mes
# %m = Muestra el número del mes
# %D = Muestra el número del día EJ: 23st.
# %d = Muestra el número del día

# VALIDAR CAMPO NULL 
# ISNULL(campo) 1=true - 0=false

# USER()= validar usuario
SELECT USER() FROM usuarios;
# Muestra los registros de el user sin repetirse
SELECT DISTINCT USER() FROM usuarios;
# DATABSE()

# IFNULL() = para mostrar un texto en el campo null
SELECT IFNULL(nombre, 'Este campoestá vacio') FROM usuarios;