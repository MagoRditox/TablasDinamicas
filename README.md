Administrador de campos dinámicos

Descripción: es donde diremos para qué exactamente es el proyecto, qué problemas resuelve y cualquier información relevante.

Módulo que permita la gestión dinámica de nuevos campos
en los formularios de una aplicación. otorgando la posibilidad de agregar o eliminar los campos que el usuario estime conveniente para contener la informacion necesaria para aumenta el contenido de los datos de los usuarios.

Instalación: muestra los pasos específicos para instalar el proyecto. Por lo general se muestra un pedazo del código necesario para la instalación.

#instalacion de sql server y Drive ODBC para base de datos.

-Entramos a esta página de Microsoft.
-Damos clic en la versión Express.
-Una vez que se descargue el instalador, lo ejecutamos.

    -Instalación básica. Sólo se instala el motor de base de datos.
    -Personalizado. Nos permite elegir qué características queremos instalar.
    -Descargar medios. Guardar el instalador para PC’s sin conexión a internet.

Elegimos la Personalizado. La instalación predeterminada se hace en Inglés. Si quieres la versión en español, tu Windows debe estar configurado como Español España.

-Una vez descargado el paquete de instalación, se abrirá un recuadro para que procedamos a instalar SQL Server.

-Instalamos una nueva instancia de SQL Server.

-Se validan las reglas previas para validar la compatibilidad con Windows. Hacer caso omiso al mensaje del Firewall.

-A continuación tenemos opción a elegir qué características queremos instalar además del Motor de base datos, como SQL Server replicación o características para hacer Machine learning con R, Python o Java.

-Seleccionamos las características a instalar.

Validamos los servicios elegidos y seleccionamos cuáles queremos que se inicien al momento que Windows inicie sesión, así como si queremos asignar una contraseña a cada servicio.

-Definimos qué usuarios iniciarán los servicios de SQL Server.

Se recomienda configurar una autenticación mixta, para que, usando el usuario sa, podamos conectarnos desde Excel o desde cualquier aplicación.

-Configuración la autenticación mixta.

Con los pasos anteriores ya podemos proceder a instalar SQL Server en nuestro equipo o Servidor.

-Instalar SQL Server Management Studio (SSMS)
Una vez instalado el servicio de SQL, ahora vamos instalar el gestor gráfico que nos permitirá interactuar con nuestras Bases de datos.

Entramos a esta página de Microsoft.
Nos vamos al link que dice Download SQL Server Management Studio (SSMS).
Procedemos a la instalación de la aplicación, la cual solo es Next, next.
Procedemos a abrir el SSMS y veremos que se nos pedirá acceso a SQL con nuestras credenciales. Puedes entrar mediante la autenticación de Windows o ingresando el usuario sa y la contraseña asignada.

-Nos conectamos al motor de base de datos SQL Server para interactuar con las base de datos.

Una vez que entremos a la aplicación, en la parte izquierda tenemos un árbol donde podemos interactuar con los objetos de SQL, como bases de datos y usuarios, administrar base de datos, crear tareas, entre otras cosas propias de SQL Server.

continuamos con la instalacion del drive para el uso de sql server, es necesario descargar desde el siguiente link
https://learn.microsoft.com/en-us/sql/connect/odbc/download-odbc-driver-for-sql-server?view=sql-server-ver16
desde el cual se encuentra el instalador.

y se procede a hacer la instlacion desde el archivo descargado.


#instalacion de npm

-1. Entrar en https://nodejs.org/es/download/ y descargar el instalador de Node.js en el sistema operativo deseado. Podemos elegir entre Windows, Mac y Linux.

-2. Ejecutar el instalador que acabamos de descargar. Simplemente debemos avanzar en el proceso de instalación.

-3. Una vez finalizado el proceso de instalación, podemos comprobar fácilmente si se nos ha instalado correctamente. Para ello, vamos al intérprete de comandos de nuestro ordenador (en Windows, por ejemplo, escribir “cmd” en la barra de búsqueda y abrir la aplicación de “Símbolo del sistema”).

-4. En la ventana de comandos, escribir node -v y pulsar la tecla Enter. Nos debería aparecer la versión que tenemos instalada de Node.js (en mi caso la versión 12.19.0). Para comprobar que se nos ha instalado también NPM, escribiremos npm -v y pulsaremos de nuevo Enter. Nos debería aparecer también en este caso la versión del Node Package Manager (en mi caso la versión 6.14.8).


#instalar xampp + php
-En el navegador web, visite Apache Friends y descargue el instalador XAMPP.
-PASO 1: EJECUTAR EL ARCHIVO .EXE
Una vez descargado el paquete, puedes ejecutar el archivo .exe haciendo doble clic en él.

-PASO 2: DESACTIVAR EL PROGRAMA ANTIVIRUS
Se recomienda desactivar el programa antivirus hasta que todos los componentes estén instalados, ya que puede obstaculizar el proceso de instalación.

-PASO 3: DESACTIVAR EL UAC
También el Control de Cuentas de Usuario (User Account Control, UAC) puede interferir en la instalación, ya que limita los derechos de escritura en la unidad de disco C:\

-PASO 4: INICIAR EL ASISTENTE DE INSTALACIÓN
Una vez superados estos pasos, aparece la pantalla de inicio del asistente para instalar XAMPP. Para ajustar las configuraciones de la instalación se hace clic en “Next” (siguiente).

-PASO 5: SELECCIÓN DE LOS COMPONENTES DEL SOFTWARE
En la rúbrica “Select components” se pueden excluir de la instalación componentes aislados del paquete de software de XAMPP.

Se recomienda la configuración estándar para un servidor de prueba local, con la cual se instalan todos los componentes disponibles. Confirma la selección haciendo clic en “Next”.

-PASO 6: SELECCIÓN DEL DIRECTORIO PARA LA INSTALACIÓN
En este paso se escoge el directorio donde se instalará el paquete. Si se ha escogido la configuración estándar se creará una carpeta con el nombre xampp en C:\

-PASO 7: INICIAR EL PROCESO DE INSTALACIÓN
El asistente extrae los componentes seleccionados y los guarda en el directorio escogido en un proceso que puede durar algunos minutos. El avance de la instalación se muestra como una barra de carga de color verde.

PASO 8: CONFIGURAR FIREWALL
Durante el proceso de instalación es frecuente que el asistente avise del bloqueo de Firewall.

En la ventana de diálogo puedes marcar las casillas correspondientes para permitir la comunicación del servidor Apache en una red privada o en una red de trabajo. Recuerda que no se recomienda usarlo en una red pública.

-PASO 9: CERRAR LA INSTALACIÓN
Una vez extraídos e instalados todos los componentes puedes cerrar el asistente con la tecla “Finish”. Para acceder inmediatamente al panel de control solo es necesario marcar la casilla que pregunta si deseamos hacerlo.

ahora agregaremos el comando php en el PHP.ini ubicado en C:/XAMPP/PHP/PHP.ini

extension=pdo_sqlsrv_81_ts_x64
extension=sqlsrv_81_ts_x64

siendo estos los conectores del php con la base de datos SQL Server.


#instalacion de composer

-Paso 1: Descargue el archivo Composer .exe
En el primer paso 1, debe abrir su navegador y escribir getcomposer. Luego visite www.getcomposer.org . Y descargar compositor. Si ya tienes Composer, descarga/instala Composer. Por lo tanto, debe continuar con el siguiente paso.

Haga clic en Descargar Composer desde  www.getcomposer.org .

-Paso 2: ejecute la configuración e instale Composer
En el paso 2, haga clic en descargar el archivo composer.exe. Luego abra un cuadro de aviso:

-Ahora establezca la ruta de PHP y haga clic en siguiente:
la cual debe ser la que esta dentro de XAMPP, que debe ser algo parecido a esto "C:\XAMPP\php\php.exe
-Si tiene alguna URL de proxy ingrese aquí, no sepa dejarla para hacer clic en siguiente
Ahora, revise el asistente de configuración del compositor. Y haga clic en instalar.

Composer se ha instalado correctamente. Haga clic para finalizar el botón.

-Paso 3: cómo verificar que Composer esté instalado o no en Windows
Ahora, abra su terminal y escriba el siguiente comando en el símbolo del sistema:

-"composer -v"

Después de ejecutar el comando anterior en cmd. Si se verá como la imagen que se muestra a continuación. Así que composer se instaló con éxito en su Windows 10 xampp.

#instalacion de vite

con los siguiente comando en el CMD haremos las instalacion de las dependencias.

npm install

luego instalamos vite, con el comando
npm install vite 

continuamos actualizando los repositorios con el comando 
composer update

y reinstalamos todo lo del proyecto
composer install

#instalacion de laravel desde el proyecto.

descargamos el proyecto desde el siguiente link 
https://github.com/MagoRditox/TablasDinamicas.git
luego lo guardamos en la carpeta deseada, continuamos con la 
instalacion de las dependencias que trae el proyecto pero que 
no son instaladas, esto lo hacemos con el comando
    composer install
luego cargamos los componentes para que arranque el programa, 
que seria con el siguiente comando.
    npm run build

y continuamos arrancando el servidor con el comando.
    php artisan serve

por lo que nos arrancara el servidor, en este caso seria.
    [http://127.0.0.1:8000]

#Cómo usar

para cargar el modulo se hace de la siguiente manera, cargamos los componentes para que arranque el programa, 
que seria con el siguiente comando.
    npm run build
y continuamos arrancando el servidor con el comando.
    php artisan serve

por lo que nos arrancara el servidor, en este caso seria.
    [http://127.0.0.1:8000]
luego cargamos el link en el navegador a eleccion.

en el cual nos arroja dos botones, uno con "Agregar Objeto" y otro con "Mostrar Datos"

en el primero se agrega un registro a la base de datos, en el que pide los siguintes campos.
    Nombre
    Descripcion
    Rol
    Color(opcional)
    Tamaño(opcional)
    Formato(opcional)
esto sera agregado a la base de datos, lo que sera capas de revisar en la seccion de "Mostrar Datos",
en esta seccion veremos los datos ingresados y los autogenerados, como e "id" esto para llevar un restro por la cantidad de ingresos que a tenido,
al ver los datos es posible realizar dos acciones, editar y eliminar.
    editar: se muestran los registros por campo para poder editar y tambien es posible agregar un campo y/o eliminar el campo necesario.
    Eliminar: elimina el dato Completo con todo su contenido.

la creacion del modulo se implementa en los formularios para el almacenamiento de informacion adicional a la ya establecida agregando o eliminando campos a eleccion.

Cómo contribuir: si es un proyecto open source se describe acá la forma en la que deberían crearse las contribuciones.

Licencia: muestra la licencia que tiene el proyecto.
En formato markdown podemos escribir cada uno de los items de esta manera:
