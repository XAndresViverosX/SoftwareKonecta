# SoftwareKonecta

Proyecto el cual se hizo para la prueba tecnica de PHP en Konecta.

## TECNOLOGIAS USADAS
- Framework CodeIgniter🔥
- HTML5,PHP8, BootStrap5, DataTables
- MySQL - XAMPP
- Composer

## Puntos a tener en cuenta

- Tener instalado la ultima version de XAMPP: **8.1.10 (PHP 8.1.10)**.
- Dependiendo del PC hay que modificar el archivo **php.ini** ubicado en ***C:\xampp\php\php.ini*** agregando la linea **extension=php_intl.dll** o quitandole el punto y coma (**;**) para no tener problemas en la ejecucion del Proyecto.
- El nombre de la Base de Datos es: **BDKonecta**.
- Formato BD: ***utf8mb4_general_ci***.
- El Archivo para importar las tablas esta en el repositorio: https://github.com/XAndresViverosX/SoftwareKonecta/blob/master/bdkonecta.sql
- En dado caso surga un error como este:
![Caso](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEidYQygKqzTPVXRt4R4lXlhxpy3MWKtqTz1ExY6mNB6QcugJaeRVEYhJSuCbIa3ea8PTlsWHGksWeKJZxuJdR45G29uwbw_pLwPGXBNS_NUL95EuHRpICZFpRZqXG9T-EwjvbYqL3SrobgeqQcAvh78z8mP-NbWkstkdo_UKZbLym340Hjkm2DbfXzS/s1600/Error.png)
Ir a la carpeta raiz del proyecto ***C:\xampp\htdocs\SoftwareKonecta*** y ejecutar en la terminal o el cmd los siguientes comandos:
**composer** require **codeigniter4/framework**
**composer update**
De esta manera el proyecto ejecutara sin problemas.

## Sentencias Solicitadas


- Sentencia para sacar el Producto con mayor Stock:
 **SELECT** * **FROM** products **WHERE** Stock = (**SELECT** **MAX**(Stock) **FROM** products);

- Sentencia para sacar el Producto mas Vendido:
 **SELECT** products.ID **AS** ID_Producto, products.NameProduct **AS** Nombre_Producto, products.Reference **AS** Referencia, products.Category **AS** Categoria, products.Stock, products.Price **AS** Precio_Unitario, products.CreationDate **AS** Fecha_Creacion, **SUM**(sales.ProductCant) **AS** CantidadVendida, sales.IDSale **AS** ID_Venta **FROM** sales **JOIN** products **ON** sales.IDProduct = products.ID **GROUP BY** products.ID **ORDER BY SUM**(sales.ProductCant) **DESC LIMIT** 1;


**!Muchas Gracias por la Oportunidad!**