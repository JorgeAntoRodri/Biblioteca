# LEEME - Instalación de la Librería

Este documento explica cómo instalar y configurar correctamente la librería en un entorno local utilizando XAMPP.

## Requisitos Previos
- Tener instalado **XAMPP** en su sistema.
- PHP y MySQL habilitados en XAMPP.
- Un navegador web actualizado.

## Instalación Paso a Paso

1. **Descargar XAMPP**
   - Si no tiene XAMPP instalado, descárgalo desde [Apache Friends](https://www.apachefriends.org/es/index.html) e instálelo.

2. **Ubicar los archivos**
   - Copie la carpeta del proyecto que contiene `app`, `public`, `index`, `agregar`, `eliminar`, `configurar`, `editar` y `estilos` dentro de la carpeta `htdocs` en la ubicación donde instaló XAMPP (por defecto `C:\xampp\htdocs\` en Windows o `/opt/lampp/htdocs/` en Linux).

3. **Iniciar XAMPP**
   - Abra XAMPP y en el panel de control inicie los módulos **Apache** y **MySQL**.

4. **Configurar la base de datos**
   - Abra su navegador y acceda a `http://localhost/phpmyadmin/`.
   - Cree una nueva base de datos con el nombre adecuado para el proyecto.
   - Importe el archivo SQL si el proyecto lo proporciona (usualmente en una carpeta `db` o `database`).

5. **Configurar el archivo de conexión a la base de datos**
   - Dentro de la carpeta `configurar`, edite el archivo de configuración y asegúrese de que los datos de conexión a la base de datos sean correctos:
     ```php
     $host = 'localhost';
     $usuario = 'root'; // Cambiar si es necesario
     $contrasena = '';  // Cambiar si tiene contraseña
     $base_de_datos = 'nombre_de_la_base';
     ```

6. **Acceder a la aplicación**
   - En el navegador, ingrese la URL:
     ```
     http://localhost/nombre_del_proyecto/
     ```
   - Esto lo llevará a la página principal de la aplicación.

7. **Estructura del Proyecto**
   - `app/` - Código principal de la aplicación.
   - `public/` - Archivos accesibles públicamente.
   - `index.php` - Archivo de inicio.
   - `agregar/` - Módulo para agregar datos.
   - `eliminar/` - Módulo para eliminar datos.
   - `configurar/` - Configuración del sistema.
   - `editar/` - Módulo de edición.
   - `estilos/` - Archivos CSS para la interfaz.
   
├── app/            # Lógica de la aplicación

├── public/         # Archivos accesibles públicamente

├── index.php       # Punto de entrada principal

├── agregar/        # Módulo de adición

├── eliminar/       # Módulo de eliminación

├── configurar/     # Archivos de configuración

├── editar/         # Módulo de edición

├── estilos/        # Archivos CSS

└── README.md       # Documentación


## Solución de Problemas
- **Apache o MySQL no inician**: Asegúrese de que ningún otro programa esté utilizando los puertos 80 o 3306.
- **Error de conexión a la base de datos**: Verifique los datos en `configurar/config.php`.
- **Archivos no se cargan correctamente**: Revise las rutas en los archivos PHP y asegúrese de que estén dentro de `htdocs`.

---
Desarrollado para su correcta instalación y uso. Para dudas, contacte al administrador del proyecto.

Estos sitios web nos ayudaron en la construcción del código libreria.

-How to make a README.txt file: Esta guía de la Universidad de Oklahoma ofrece instrucciones detalladas sobre cómo crear un archivo README.txt,
destacando su importancia y contenido recomendado. https://libraries.ou.edu/content/how-make-readmetxt-file?utm_source=chatgpt.com
-readme.txt - shurcooL-legacy/Simple-Text-Editor: Este es un ejemplo práctico de un archivo readme.txt 
para un editor de texto simple implementado en Java, alojado en GitHub https://github.com/shurcooL-legacy/Simple-Text-Editor/blob/master/readme.txt?utm_source=chatgpt.com

ABOUT US
"¡Hola! Soy Jorge Antonio Rodríguez Rodríguez soy estudiante de la carrera de Ing. Sistemas Computacionales, he creado un proyecto para ayudarte a instalar y configurar una librería utilizando XAMPP. 
El objetivo es hacer que el proceso sea lo más fácil y accesible posible, derivado a eso he creado un crud en el cual coloque las funciones basicas de una libreria 
donde podiamos agregar. eliminar, editar y todo esto se reflejaba en una base de datos en phpmyadmin.
