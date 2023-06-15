# Proyecto CUADERNO TUTOR FCT

Este proyecto es una aplicación web desarrollada utilizando [Vite](https://vitejs.dev/), un marco de desarrollo rápido para aplicaciones web basado en Vue.js, y [Bootstrap](https://getbootstrap.com/), un framework CSS popular.

## Requisitos previos

Asegúrate de tener instalado [Node.js](https://nodejs.org/) en tu máquina antes de ejecutar este proyecto. Además, asegúrate de tener [XAMPP](https://www.apachefriends.org/index.html) instalado y en funcionamiento para ejecutar el servidor web local.

## Configuración

1. Clona este repositorio en la carpeta `htdocs` de tu instalación de XAMPP. 
2. Navega hasta la carpeta del proyecto.
3. Ejecuta el siguiente comando para instalar las dependencias:

```shell
npm install
```

Scripts disponibles
------------------

En el directorio del proyecto, puedes ejecutar los siguientes comandos:

### `npm run dev`

Ejecuta la aplicación en el modo de desarrollo. Abre [http://localhost:3000](http://localhost:3000) en tu navegador para ver la aplicación en vivo. La página se recargará automáticamente si realizas cambios en el código fuente.

### `npm run build`

Compila y construye la aplicación para producción en la carpeta `dist`. La aplicación está lista para ser implementada en un servidor web.

### `php artisan serve`

Inicia el servidor de desarrollo de Laravel. Asegúrate de tener XAMPP en funcionamiento y ejecuta este comando para iniciar el servidor en [http://localhost:8000](http://localhost:8000).

Dependencias
------------

El proyecto utiliza las siguientes dependencias:

Dependencias de desarrollo

- `@popperjs/core`: Librería que proporciona utilidades para el posicionamiento de elementos emergentes.
- `@vitejs/plugin-vue`: Plugin oficial de Vite para admitir la compilación de archivos Vue.
- `axios`: Cliente HTTP basado en promesas para realizar solicitudes a servidores.
- `bootstrap`: Framework CSS popular para el desarrollo de interfaces web.
- `laravel-vite-plugin`: Plugin de Vite para Laravel que facilita la integración de Vite con aplicaciones Laravel.
- `sass`: Preprocesador de CSS que agrega funcionalidades adicionales a los estilos.
- `vite`: Herramienta de construcción rápida y optimizada para aplicaciones web.
- `vue`: Biblioteca JavaScript para construir interfaces de usuario interactivas.

Dependencias de producción

- `bootstrap-icons`: Conjunto de iconos SVG de Bootstrap.
- `composer`: Herramienta para la gestión de paquetes de PHP.
- `curl`: Cliente HTTP basado en la línea de comandos.
