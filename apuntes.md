# Crea tus aplicaciones con Laravel y MongoDB
+ [URL del curso en Udemy](https://www.udemy.com/course/crea-tus-aplicaciones-con-laravel-y-mongodb)
+ [URL del repositorio en GitHub]()

## Antes de iniciar:
1. Crear proyecto en la página de [GitHub](https://github.com) con el nombre: **laravel_mongodb_2021**.
    + **Description**: Proyecto para seguir el curso de Crea tus aplicaciones con Laravel y MongoDB, creado por Andrés Cruz Yoris en Udemy.
    + **Public**.
2. En la ubicación raíz del proyecto en la terminal de la máquina local:
    + $ git init
    + $ git add .
    + $ git commit -m "Commit 000: Antes de iniciar"
    + $ git branch -M main
    + $ git remote add origin https://github.com/petrix12/laravel_mongodb_2021.git
    + $ git push -u origin main

## Sección 01: Introducción

### Video 001. Introducción
**Contenido**: Breve introducción sobre el curso.
1. Commit Video 001:
    + $ git add .
    + $ git commit -m "Commit 001: Introducción"
    + $ git push -u origin main

### Video 002. **** IMPORTANTE: Realizar preguntas
1. Recuerda que si quieres ver TODO el contenido e ir viendo TODO lo que voy subiendo a lo largo del mes, desde la sección de anuncios es mi blog puedes buscar la publicación o desde este enlace:
    + https://www.desarrollolibre.net/anuncios/contenido-para-septiembre-2021-actualizaciones-cursos-flask-vue-y-nuevo-curso-vue-native
2. Youtube:
    + [Aprende a usar las redirecciones en Django en menos de 5 minutos](https://www.youtube.com/watch?v=EvS-H-Y8T0M)
    + [Migrar de RaisedButton a un ElevatedButton en Flutter](https://www.youtube.com/watch?v=EvS-H-Y8T0M)
3. Mi Blog
    + [Conoce unas historias de éxitos de empresas que migraron a Vue](https://www.desarrollolibre.net/blog/vue/9-empresas-que-utilizan-vuejs-en-2021)
    + [Operaciones tipo CRUD con MongoDB](https://www.desarrollolibre.net/blog/mongodb/realizar-operaciones-crud-con-mongodb)
4. Commit Video 002:
    + $ git add .
    + $ git commit -m "Commit 002: **** IMPORTANTE: Realizar preguntas"
    + $ git push -u origin main

### Video 003. Sobre el curso
1. Instalar Laravel.
2. Commit Video 003:
    + $ git add .
    + $ git commit -m "Commit 003: Sobre el curso"
    + $ git push -u origin main

### Video 004. Estructura del curso
**Contenido**: El objetivo principal del curso es aprender trabajar MongoDB en Laravel.
1. Commit Video 004:
    + $ git add .
    + $ git commit -m "Commit 004: Estructura del curso"
    + $ git push -u origin main

### Video 005. Requisitos para tomar el curso
**Contenido**: Sobre requisitos del curso.
1. Commit Video 005:
    + $ git add .
    + $ git commit -m "Commit 005: Requisitos para tomar el curso"
    + $ git push -u origin main

### Video 006. Sobre las calificaciones
**Contenido**: Evaluar el curso honestamente.
1. Commit Video 006:
    + $ git add .
    + $ git commit -m "Commit 006: Sobre las calificaciones"
    + $ git push -u origin main

## Sección 02: Preparar el entorno de desarrollo

### Video 007. Instalar MongoDB en Windows con Laragon
+ https://www.mongodb.com/es
+ https://laragon.org/docs/quick-add.html
+ https://forum.laragon.org/topic/815/mongodb-addon-for-laragon
1. Ejecutar **Laragon** e ir a **Menú > Herramientas > Quick add > mongodb-4** para instalar MongoDB.
    + **Nota**: MongoDB se instalará en **C:\laragon\bin\mongodb\mongodb-4.0.3**
    + **Ruta para ejecutar MongoDB**: C:\laragon\bin\mongodb\mongodb-4.0.3\
2. Reiniciar los servicios de **Laragon** para activar los servicios de **MongoDB**.
3. Agregar MongoDB al path del sistema de Windows:
    + Ir a Variables de entorno del sistema y agregar la ruta:
        + C:\laragon\bin\mongodb\mongodb-4.0.3
4. Commit Video 007:
    + $ git add .
    + $ git commit -m "Commit 007: Instalar MongoDB en Windows con Laragon"
    + $ git push -u origin main

### Video 008. Opcional: Instalar MongoDB en Windows (Sin Laragon)
1. **Opcional**: Instalar MongoDB en Windows (Sin Laragon)
    + También puedes instalar MongoDB de la manera tradicional (Esto es útil si necesitas trabajar con la última versión de MongoDB, que es descargando el instalador desde la web oficial en:
        + https://www.mongodb.com/try/download/community
2. Commit Video 008:
    + $ git add .
    + $ git commit -m "Commit 008: Opcional: Instalar MongoDB en Windows (Sin Laragon)"
    + $ git push -u origin main

### Video 009. Agregar la extensión (DLL) de MongoDB a PHP en Windows/Laragon
+ https://forum.laragon.org/login
1. Ir a la página https://pecl.php.net/package/mongodb/1.8.0/windows y descargar la DLL compatible con tu versión de PHP de Laragon, en mi caso será: **7.4 Thread Safe (TS) x64**.
2. Del archivo ZIP de la descarga extraer lm DLL (**php_mongodb.dll**) y pegarla en **C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\ext**.
3. Para finalizar de instalar y configurar la extensión de MongoDB y a Laragon y habilitar la extensión en:
    + Menú > PHP > Extensiones > mongodb
    + **Nota**: de aquí en adelante se podrá usar MongoDB en cualquier proyecto de PHP en Laragon.
4. Commit Video 009:
    + $ git add .
    + $ git commit -m "Commit 009: Agregar la extensión (DLL) de MongoDB a PHP en Windows/Laragon"
    + $ git push -u origin main

### Video 010. Actualizar MongoDB Windows con Laragon
+ Actualización MongoDB Laragon: https://forum.laragon.org/topic/172/tutorial-how-to-install-mongodb-extension/2
+ DLL's MongoDB PHP: https://dl.mongodb.org/dl/win32/x86_64
1. Descargar la versión 4.2 de MongoDB en https://www.mongodb.com/download-center/community/releases/archive
2. Descomprimir la descarga y renombrar la carpeta **bin** a **mongodb-4.2** y ubicarla en **C:\laragon\bin\mongodb**.
3. Ir a Laragon y seleccionar la nueva versión en:
    + Menú > MongoDB > Versión .....
4. Reiniciar todos los servicios de Laragon.
    + Las bases de datos de MongoDB se encuentran en:
        + C:\laragon\data\mongodb-4
5. Commit Video 010:
    + $ git add .
    + $ git commit -m "Commit 010: Actualizar MongoDB Windows con Laragon"
    + $ git push -u origin main

### Video 011. Instalar MongoDB en MacOS
**Contenido**: sobre como instalar MongoDB en una MacOS.
5. Commit Video 011:
    + $ git add .
    + $ git commit -m "Commit 011: Instalar MongoDB en MacOS"
    + $ git push -u origin main

### Video 012. Agregar la extensión (DLL) de MongoDB a PHP en general



### Video 013. Crear el proyecto en Laravel 7
### Video 014. Agregar dependencia para trabajar con MongoDB




1. Commit Video 001:
    + $ git add .
    + $ git commit -m "Commit 001: Recomendaciones para una mejor experiencia en el curso"
    + $ git push -u origin main





    ≡
    ```json
    ```

## Comandos Git:
+ Historial de commit:
    + git log --pretty=oneline
+ Borrar ultimo commit:
    + git reset HEAD^ --soft
+ Forzar push
    + git push origin -f