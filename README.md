# Proyecto CUADERNO TUTOR FCT

Este proyecto es una aplicación web desarrollada utilizando [Laravel](https://laravel.com/docs/4.2#install-laravel) y [Bootstrap](https://getbootstrap.com/), un framework CSS popular. Como gestor de BBDD usa [MySQL](https://www.mysql.com/)

## Requisitos previos

1. [Node.js](https://nodejs.org/) Versión 18.16
2. [XAMPP](https://www.apachefriends.org/index.html) Versión 8.2.4
3. [Git](https://git-scm.com/downloads) Versión 2.41.0
4. [Composer](https://getcomposer.org/download/) Versión 2.5.8
5. [Laravel]([https://laravel.com/docs/4.2#install-laravel](https://laravel.com/docs/10.x)) Versión 10.13.5

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

## Configuración y Ejecución

Sigue estos pasos para configurar y ejecutar el proyecto:

1. Asegúrate de tener XAMPP instalado y funcionando con los servicios de **Apache** y **MySQL** activos.

2. En el directorio raíz del proyecto, abre una terminal o línea de comandos y ejecuta el siguiente comando para iniciar el servidor de desarrollo de Laravel:

   ```shell
   php artisan serve
   ````
Esto iniciará el servidor en [http://127.0.0.1:8000].

3. En otra terminal o línea de comandos, asegúrate de tener Node.js y npm instalados.

4. Ejecuta el siguiente comando para compilar los assets de tu proyecto:

```shell
npm run dev
```
5. Esto compilará los archivos necesarios y los preparará para su uso en el navegador.

6. Finalmente, abre tu navegador web y visita [http://127.0.0.1:8000] para ver la aplicación en vivo. La página se recargará automáticamente si realizas cambios en el código fuente.
