# Proyecto CUADERNO TUTOR FCT

Este proyecto es una aplicación web desarrollada utilizando [Laravel](https://laravel.com/docs/4.2#install-laravel) y [Bootstrap](https://getbootstrap.com/), un framework CSS popular. Como gestor de BBDD usa [MySQL](https://www.mysql.com/)

## Requisitos previos

1. [Node.js](https://nodejs.org/) Versión 9.5.1
2. [XAMPP](https://www.apachefriends.org/index.html) Versión 8.2.4
3. [Git](https://git-scm.com/downloads) Versión 2.41.0
4. [Composer](https://getcomposer.org/download/) Versión 2.5.8
5. [Laravel](https://laravel.com/docs/4.2#install-laravel) Versión 4.2

## Configuración

1. Clona este repositorio en la carpeta **`htdocs` de tu instalación de XAMPP**.
   ```shell
   git clone https://github.com/GONZOLOL/CuadernoTutorFCT.git
   ```
3. Navega hasta la carpeta del proyecto.
    ```shell
   cd /CuadernoTutorFCT
   ```
5. Ejecuta el siguiente comando para **instalar las dependencias**:
```shell
npm install
```
## Añadir la Base de Datos a MySQL

Asegúrate de tener XAMPP en funcionamiento, tanto **Apache** como **MySQL**.

1. Entra en el navegador a http://localhost/phpmyadmin/
2. Crea una nueva base de datos importando este archivo
   [Enlace Descarga cuaderno-tutor.sql](./database/cuaderno_tutor.sql)
3. Ejecuta el siguiente comando para realizar la migraciones de la tabla users:
   ```shell
   php arsitan migrate
   ```
   

Scripts disponibles
------------------

En el directorio del proyecto, ejecuta los siguientes comandos:

Asegúrate de tener XAMPP en funcionamiento, tanto **Apache** como **MySQL**.

### `php artisan serve`

Inicia el servidor de desarrollo de Laravel.y ejecuta este comando para iniciar el servidor en [http://localhost:8000](http://localhost:8000).

### `npm run dev`

Ejecuta la aplicación en el modo de desarrollo. Abre [http://localhost:3000](http://localhost:3000) en tu navegador para ver la aplicación en vivo. La página se recargará automáticamente si realizas cambios en el código fuente.


