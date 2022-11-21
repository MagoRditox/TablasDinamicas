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
    
    
    
    
    Para la instalación, y despues de haber instalado todos los programas necesarios, se seguirán los siguientes pasos EN ORDEN.
    
    
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
    
    1- Instalar todos los programas
    2- Clonar repositorio en C:\xampp\htdocs
    3- En la ruta del repositorio, abrir una consola y seguir los pasos a continuación
    3.1- "composer update"
    3.2- "composer install"
    3.3- "npm install"
    3.4- "npm run build"
    
    
