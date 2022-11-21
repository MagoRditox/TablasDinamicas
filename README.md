<p align="center"><a>Administración campos dinámicos</a></p>

<p align="center">
    <a>Dependencias (Windows 10 solamente)</a><br>
1.-<a href="https://www.apachefriends.org/download.html">Xampp</a> (uso único de PHP, version 8.1.6)<br>
2.-<a href="https://getcomposer.org/download/">Composer</a> (requisito tener xampp o php version 8.1.6 antes de instalar)<br>
3.-<a href="https://www.microsoft.com/en-us/sql-server/sql-server-downloads">SQL server 2019</a> (version developer usada, no se a testeado version express)<br>
4.-<a href="https://learn.microsoft.com/en-us/sql/ssms/download-sql-server-management-studio-ssms?view=sql-server-ver16"> SSMS 18.12.1</a>utilizado para crear administrador, probablemente opcional<br>
5.-<a href="https://nodejs.org/en/download/">Node</a><br>
6.-<a href="https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server?view=sql-server-2017">pdo para migraciones en servidor sqlsrv</a><br>
7.-<a href="https://learn.microsoft.com/en-us/sql/connect/odbc/download-odbc-driver-for-sql-server?view=sql-server-ver16">necesario para dar acceso al servidor</a><br>
</p>

<p align="center">
    <a>Tutorial instalación</a><br>
    
    
    
    
    Instale todos los programas presentados arriba, despues de haber instalado todos los programas necesarios, se seguirán los siguientes pasos EN ORDEN.
    
    
    Primer paso.
    
    En el primer paso, se procedera a configurar el PHP de xampp para dejarlo utilizable junto a la base de datos sqlsrv, primero, se deberan extraer 2 archivos de la dependencia número 6.
    
    1- Extraer los archivos llamados "php_sqlsrv_81_ts_x64.dll" y "php_pdo_sqlsrv_81_ts_x64.dll", paso siguiente dejar los archivos en el directorio "ext" en la carpeta de php de xampp (C:\xampp\php\ext)
    2- Editar php.ini (C:\xampp\php), en el cual se deben añadir en cualquier parte de este las siguientes lineas

     extension=php_pdo_sqlsrv_81_ts_x64.dll
     extension=php_sqlsrv_81_ts_x64.dll
    
    A continuación, configuraremos el "odbc", para esto debemos:
    1-Abrir el manager del servidor SQL
    2-Seleccionamos "protocolos"
    3-Seleccionamos "TCP/IP"
    4-Habilitamos "TCP/IP"
    5-Reiniciamos el servicio
    
    
    Segundo paso
    
    
    En el segundo paso, configuraremos el servidor y la base de datos, para ello, abriremos sql manager studio, y entraremos con la autenticación de windows.
    
    1-nos dirigimos a la carpeta Security/Logins y con click derecho creamos un nuevo usuario.
    2-el nombre de usuario será "integra", y la autenticación la cambiamos a autenticación SQL, como contraseña, añadimos "integra" también.
    3-en la pestaña de la izquierda, seleccionamos "roles del servidor(o Server roles si está en inglés), y le damos todos los permisos al usuario.
    4-acto seguido, nos vamos a las propiedades del servidor, y en la pestaña seguridad, cambiamos la autenticación de "Autenticación de windows" a "modo SQL server y autenticación de windows"
    5- reiniciamos el servidor
    
    Ahora, creamos la base de datos
    
    1-nos dirigimos a "databases" o "base de datos" y creamos una base de datos llamada "DATABASEINTEG" y guardamos.
    
    Tercer paso
    
    
    En el tercer paso, se procede a la implementación de las dependencias, para esto, seguiremos una serie de comandos. 
    1- Clonar repositorio en C:\xampp\htdocs
    2- En la ruta del repositorio, abrir una consola y seguir los pasos a continuación
    2.1- "composer update"
    2.2- "composer install"
    2.3- "npm install"
    2.4- "npm run build"
    3- crear archivo .env en la raiz del repositorio y pegar contenido de .env.example
    3.1-se configura el archivo .env tomando en cuenta que base de datos será usada, ya que utilizaremos sqlsrv, ocuparemos la siguiente conexión
    
     DB_CONNECTION=sqlsrv
     DB_HOST=127.0.0.1
     DB_PORT=1434
     DB_DATABASE=DATABASEINTEG
     DB_USERNAME=integra
     DB_PASSWORD=integra
    
    4- "php artisan key:generate"
    5- "php artisan serve"
    
    Al haber iniciado el servidor, nos dirigimos a 127.0.0.1/8000 y tendremos el programa funcionando.
