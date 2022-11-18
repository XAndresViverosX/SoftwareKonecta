# SoftwareKonecta

Proyecto el cual se hizo para la prueba tecnica de PHP en Konecta.

## TECNOLOGIAS USADAS
- Framework CodeIgniter🔥
- HTML5,PHP8, BootStrap5, DataTables
- MySQL - XAMPP

## Puntos a tener en cuenta

- Tener instalado la ultima version de XAMPP: **8.1.10 (PHP 8.1.10)**.
- Dependiendo del PC hay que modificar el archivo **php.ini** ubicado en ***C:\xampp\php\php.ini*** agregando la linea **extension=php_intl.dll** o quitandole el punto y coma (**;**) para no tener problemas en la ejecucion del Proyecto.
- El nombre de la Base de Datos es: **BDKonecta**.
- Formato BD: ***utf8mb4_general_ci***.
- El Archivo para importar las tablas esta en el repositorio: https://github.com/XAndresViverosX/SoftwareKonecta/blob/master/bdkonecta.sql

## Sentencias Solicitadas


- Sentencia para sacar el Producto con mayor Stock:
 **SELECT** * **FROM** products **WHERE** Stock = (**SELECT** **MAX**(Stock) **FROM** products);

- Sentencia para sacar el Producto mas Vendido:
 **SELECT** * **FROM** sales **WHERE** ProductCant = (**SELECT** **MAX**(ProductCant) **FROM** sales); 
 

**!Muchas Gracias por la Oportunidad!**
