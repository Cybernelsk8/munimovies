MUNIMOVIES

INSTRUCCIONES DE DESPLIEGUE

Despues de haber clonado el repositorio seguir las siguientes instrucciones.


    1-. Ingresa al proyecto y ejecuta el comando en la terminal "composer install" y espera a que termine.
    2-. Ejecuta el comando "npm install" y espera a que termine.
    3-. Crea un link simbolico con el comando "php artisan storage:link".
    4-. Crea el archivo ".env" lo puedes realizar haciendo una copia del archivo ".env.example" y puedes renombrar el archivo con el nombre ".env"
    5-. Configura las variables de entorno a utilizar, como el siguiente ejemplo:

        APP_NAME=MuniMovies
        APP_ENV=local
        APP_KEY=base64:PiqnqxexRUIwTNp7eFzdhW+UkVER5VRsrdaDX66I6mE=
        APP_DEBUG=true
        APP_URL=http://MuniMovies.test

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=munimovies
        DB_USERNAME=root
        DB_PASSWORD=

    6-. Genera la una APP_KEY con el siguiente comando "php artisan key:generate"
    7-. Guarda los cambios que realizaste en el archivo ".env"
    8-. Ejecuta las migraciones con todos los seeders con el comando "php artisan migrate --see", y espera a que termine.
    9-. Ejecuta el comando npm "run dev" y espera a que termine.

INSTRUCCIONES DE USO

Una vez hallas logrado desplegar el proyecto ya esta listo para utilizarse, este con motivos de prueba ya tiene un usuario el cual es:
    email: admin@example.com
    password: 123456789

Esto para que logres accesar y tener un usuario de ejemplo o bien puedes registrar uno nuevo.

INFORMACION DEL PROYECTO

El proyecto esta realizado con LARAVEL 8 utilizando todo el stack del mismo con los siguientes frameworks.

    FrondEnd: Tailwind y AlphineJS
        Se utilizo la plantilla por defecto de Jetstream y el manejo de componente con LiveWire

    BackEnd: Laravel 8 (php 7.4)
        Se utilizo el paquete de de Fortify y Sanctum para la logica de logueo y registros de usuarios.

    Librerias adicionales: Se utilizo para iconos FontAwesome

    Para el manejo de las bases de datos: Se utilizo el ORM Eloquent de Laravel.
