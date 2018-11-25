/*
int(N° de cifras) ENTERO
intEGER(N° de cifras) ENTERO 
varchar (N° de caracteres) STRING/ALFANUMERICO *Máximo 255
char(N° caracteres) STRING/ALFANUMERICO
float(N° de cifras,decimales) DESCIMAL/COMA FLOTANTE
date, time, timestamp

//Strings más grandes
TEXT 65.535 caracteres
MEDIUMTEXT 16 millones de caracteres
LONGTEXT 16 billones de caracteres

//Enteros mas grandes
MEDIUMINT
BIGINT
*/
/*
CREAR TABLA    
*/

CREATE TABLE usuarios(
    id  int(11) auto_increment not null,
    nombre  varchar(100) not null,
    apellidos   varchar(255) default 'hola que tal',
    email   varchar(100) not null,
    password    varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);