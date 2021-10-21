# Crea tus aplicaciones con Laravel y MongoDB
+ [URL del curso en Udemy](https://www.udemy.com/course/crea-tus-aplicaciones-con-laravel-y-mongodb)
+ [URL del repositorio en GitHub](https://github.com/petrix12/laravel_mongodb_2021.git)
+ [Comando comunes MongoDB](consultas.md)

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
+ **Contenido**: Breve introducción sobre el curso.
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
+ **Contenido**: El objetivo principal del curso es aprender trabajar MongoDB en Laravel.
1. Commit Video 004:
    + $ git add .
    + $ git commit -m "Commit 004: Estructura del curso"
    + $ git push -u origin main

### Video 005. Requisitos para tomar el curso
+ **Contenido**: Sobre requisitos del curso.
1. Commit Video 005:
    + $ git add .
    + $ git commit -m "Commit 005: Requisitos para tomar el curso"
    + $ git push -u origin main

### Video 006. Sobre las calificaciones
+ **Contenido**: Evaluar el curso honestamente.
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
3. Commit Video 007:
    + $ git add .
    + $ git commit -m "Commit 007: Instalar MongoDB en Windows con Laragon"
    + $ git push -u origin main

### Nota 008. Opcional: Instalar MongoDB en Windows (Sin Laragon)
1. **Opcional**: Instalar MongoDB en Windows (Sin Laragon)
    + También puedes instalar MongoDB de la manera tradicional (Esto es útil si necesitas trabajar con la última versión de MongoDB, que es descargando el instalador desde la web oficial en:
        + https://www.mongodb.com/try/download/community
2. Commit Nota 008:
    + $ git add .
    + $ git commit -m "Commit 008: Opcional: Instalar MongoDB en Windows (Sin Laragon)"
    + $ git push -u origin main

### Video 009. Agregar la extensión (DLL) de MongoDB a PHP en Windows/Laragon
+ https://forum.laragon.org/login
1. Ir a https://www.mongodb.com/try/download/community
2. Descargar en formato **zip** la versión actual de MongoDB para tu SO.
3. Descomprimir la descarga y extraer la carpeta **bin** (lo demás se puede eliminar).
4. Renombrar la carpeta **bin** a **mongodb-[versión]** (Ejm.: **mongodb-5.03**) y ubicarla en:
    + C:\laragon\bin\mongodb
5. En laragon ir a **Menú > MongoDB** y cambiar la versión a la nueva.
6. Anexar la siguiente ruta a las variables de entorno de Windows:
    + C:\laragon\bin\mongodb\mongodb-[versión]
7. Ir a https://pecl.php.net/package/mongodb y descargar la DLL (**X:X Thread Safe (TS) x64**) de la versión más actual y estable.
8. Descomprimimos la descargas y movemos el archivo **php_mongodb.dll** a **C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\ext** el resto de la descarga lo borramos.
9.  Modificar el archivo de configuración **C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\php.ini** para agregar la extensión de MongoDB **extension=php_mongodb.dll**:
    ```ini
    ≡
    ;extension=soap
    ;extension=sockets
    ;extension=sodium
    ;extension=sqlite3
    ;extension=tidy
    ;extension=xmlrpc
    extension=xsl
    extension=php_mongodb.dll

    ;;;;;;;;;;;;;;;;;;;
    ; Module Settings ;
    ;;;;;;;;;;;;;;;;;;;
    ≡
    ```
    + **Nota**: de aquí en adelante se podrá usar la nueva versión de MongoDB en cualquier proyecto de PHP en Laragon.
10. Commit Video 009:
    + $ git add .
    + $ git commit -m "Commit 009: Agregar la extensión (DLL) de MongoDB a PHP en Windows/Laragon"
    + $ git push -u origin main

### Video 010. Actualizar MongoDB Windows con Laragon
+ Actualización MongoDB Laragon: https://forum.laragon.org/topic/172/tutorial-how-to-install-mongodb-extension/2
+ DLL's MongoDB PHP: https://dl.mongodb.org/dl/win32/x86_64
+ **Contenido**: sobre como actualizar MongoDB.
5. Commit Video 010:
    + $ git add .
    + $ git commit -m "Commit 010: Actualizar MongoDB Windows con Laragon"
    + $ git push -u origin main

### Video 011. Instalar MongoDB en MacOS
+ **Contenido**: sobre como instalar MongoDB en una MacOS.
1. Commit Video 011:
    + $ git add .
    + $ git commit -m "Commit 011: Instalar MongoDB en MacOS"
    + $ git push -u origin main

### Video 012. Agregar la extensión (DLL) de MongoDB a PHP en general
+ **Contenido**: sobre como instalar el controlador de MongoDB en Windows. Para esta tarea seguir los pasos indicados en la siguiente página:
    + https://www.php.net/manual/es/mongodb.installation.windows.php
1. Commit Video 012:
    + $ git add .
    + $ git commit -m "Commit 012: Agregar la extensión (DLL) de MongoDB a PHP en general"
    + $ git push -u origin main

### Video 013. Crear el proyecto en Laravel 7
1. Crear proyecto Laravel
    + $ composer create-project laravel/laravel 29laravel_mongo "7.*"
    + **Nota 1**: de aquí en adelante la apllicación se puede ejecutar en local en http://29laravel_mongo.test
2. Commit Video 013:
    + $ git add .
    + $ git commit -m "Commit 013: Crear el proyecto en Laravel 7"
    + $ git push -u origin main

### Video 014. Agregar dependencia para trabajar con MongoDB
+ https://github.com/jenssegers/laravel-mongodb
1. Instalar dependencias para MongoDB:
    + $ composer require mongodb/mongodb
    + $ composer require jenssegers/mongodb:4.0.0-alpha.1
2. Commit Video 014:
    + $ git add .
    + $ git commit -m "Commit 014: Agregar dependencia para trabajar con MongoDB"
    + $ git push -u origin main

## Sección 03: Primeros pasos con MongoDB: Operaciones CRUD

### Video 015. Documentación a emplear y pasos a seguir
+ https://docs.mongodb.com/manual
1. Crear archivo **consultas.md** para guardar las consultas que realizaremos a MongoDB.
2. Commit Video 015:
    + $ git add .
    + $ git commit -m "Commit 015: Documentación a emplear y pasos a seguir"
    + $ git push -u origin main

### Video 016. Conociendo MongoDB
1. Ejecutar MongoDB:
    + $ mongo
2. Ver las bases de datos:
    + > show databases
    ó
    + > show dbs
3. Para ubicarnos en la base de datos **crud**.
    + > use crud
    + **Nota**: **crud** no existirá hasta tanto no contenga ninguna colección con documentos.
4. Commit Video 016:
    + $ git add .
    + $ git commit -m "Commit 016: Conociendo MongoDB"
    + $ git push -u origin main

### Video 017. Trabajando con las colecciones
1. Para ver las colecciones de una base de datos:
    + > show collections
2. Iniciar escritura en [consultas.md](consultas.md)
3. Commit Video 017:
    + $ git add .
    + $ git commit -m "Commit 017: Trabajando con las colecciones"
    + $ git push -u origin main

### Video 018. Métodos -insert- para crear documentos/registros
1. Crear un documento:
    + > var book1 = {'name': 'El señor de los anillos', 'description': 'Libro de fantasia'}
2. Ver el documento **book1**:
    + > book1
3. Ver el name del documento **book1**:
    + > book1.name
4. Crear colección **books** con el documento **book1**:
    + > db.books.insertOne(book1)
5. Crear los documentos **book2** y **book3**:
    + > var book2 = {'name': 'Harry Potter y La Piedra Filosofal', 'description': 'Libro de fantasia'}
    + > var book3 = {'name': 'Harry Potter y La Cámara Secreta', 'description': 'Libro de fantasia'}
6. Incluir los documentos **book2** y **book3** en la colección **books**:
    + > db.books.insertMany([book2, book3])
7. Ejecutar:
    + > db.books.insert(book1)
    + > db.books.insert([book2, book3])
8. Commit Video 018:
    + $ git add .
    + $ git commit -m "Commit 018: Métodos -insert- para crear documentos/registros"
    + $ git push -u origin main

### Video 019. Método -find- para buscar documentos/registros y findOne
1. Mostrar todos los documentos de la colección **books**:
    + > db.books.find()
2. Commit Video 019:
    + $ git add .
    + $ git commit -m "Commit 019: Método -find- para buscar documentos/registros y findOne"
    + $ git push -u origin main

### Nota 020. Generación del ID
+ https://docs.mongodb.com/manual/reference/method/ObjectId
1. **Generación del ID**: MongoDB toma varios aspectos para generar el identificador o ID de cada documento (registro) que guarda en nuestras colecciones (tablas). El ID, es generado con una función llamada ObjectID la cual genera valor de 12 byte:
    + 4 byte que corresponden a un timestamp de la PC.
    + 5 byte de un valor aleatorio.
    + 3 byte de un contador aleatorio incremental.
2. Commit Video 020:
    + $ git add .
    + $ git commit -m "Commit 020: Generación del ID"
    + $ git push -u origin main

### Video 021. Método -find- con parámetros de búsqueda (query) y campos (proyección)
1. Obtener un documento de la colección **books**:
    + > db.books.findOne()
2. Obtener un documento de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal**:
    + > db.books.findOne({'name': "Harry Potter y La Piedra Filosofal"})
3. Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal**:
    + > db.books.find({'name': "Harry Potter y La Piedra Filosofal"})
4. Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal** pero que regrese solamente la clave **name**:
    + > db.books.find({'name': "Harry Potter y La Piedra Filosofal"}, {'name': true})
5. Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal** pero que regrese solamente la clave **name** y que no aparezca la clave **_id**:
    + > db.books.find({'name': "Harry Potter y La Piedra Filosofal"}, {'name': true, '_id': false})
6. Commit Video 021:
    + $ git add .
    + $ git commit -m "Commit 021: Método -find- con parámetros de búsqueda (query) y campos (proyección)"
    + $ git push -u origin main

### Video 022. Método -update- para actualizar documentos
1. Actualizar el documento con **"_id" : ObjectId("616f6c6de52184190e6f0c7c")**:
    + db.books.updateOne({'_id': ObjectId("616f6d98e52184190e6f0c7f")}, {$set: {'name': "Harry Potter y el prisionero de Azcaban"}})
2. Commit Video 022:
    + $ git add .
    + $ git commit -m "Commit 022: Método -update- para actualizar documentos"
    + $ git push -u origin main

### Video 023. Método -delete- para eliminar documentos
1. Eliminar el registro con :Eliminar documento por **"_id" : ObjectId("616f6d98e52184190e6f0c7f")**:
    + > db.books.deleteOne({ '_id' : ObjectId("616f6d98e52184190e6f0c7f")})
2. Salir de la consola de MongoDB:
    + > exit
3. Commit Video 023:
    + $ git add .
    + $ git commit -m "Commit 023: Método -delete- para eliminar documentos"
    + $ git push -u origin main

### Nota 024. Consultas CRUD a realizar
1. Archivo de consultas del autor del curso **consultas.js**:
    ```js
    // bases de datos
    show databases; // mostrar base de datos
    show dbs;       // variacion comando anterior

    use crud;       // usar o establecer base de datos

    // colecciones
    show collections// mostrar colecciones/tablas de la base de datos seleccionada

    //*** crear colecciones y base de dato de manera automatica */

    // 1 esquema para crear una coleccion
    /*db.createCollection( <name>,
        {
        capped: <boolean>,
        autoIndexId: <boolean>,
        size: <number>,
        max: <number>,
        storageEngine: <document>,
        validator: <document>,
        validationLevel: <string>,
        validationAction: <string>,
        indexOptionDefaults: <document>,
        writeConcern: <document>
        }
    );*/

    // 2 realizar operacion 
    db.books.insert()

    //*** CRUD insertar

    var book1 = {
        'name': 'GOT - Vientos de Invierno - InsertOne',
        'description': 'Libro de fantasia'
    };

    db.books.insertOne(book1);

    var book2 = {
        'name': 'GOT - cancion de hielo y fuego - InsertMany',
        'description': 'Libro de fantasia ...'
    };

    var book3 = {
        'name': 'GOT - sangre y fuego - InsertMany',
        'description': 'Libro de fantasia XD'
    };

    db.books.insertMany([book2, book3]);

    db.books.insert(book1);
    db.books.insert([book2, book3]);


    // **** Encontrar

    db.books.find()

    db.books.find({
        '_id': ObjectId("5f455708a55825fbec49366c"),
        'name': "GOT - Vientos de Invierno - InsertOne",
    }
    );


    // query y proyecciones
    db.books.find({
        '_id': ObjectId("5f455708a55825fbec49366c"),
        'name': "GOT - Vientos de Invierno - InsertOne",
    },
    {
        'name' : true,
        '_id': false
    }
    );

    // **** Actualizar

    db.books.updateOne(
        {
            '_id': ObjectId("5f45596ea55825fbec49366f"),
        },
        {
            $set : {
                'name': "GOT - Vientos de Invierno - InsertOne 2.0",
            }
        }
    );

    db.books.updateMany(
        {
            'name': "GOT - Vientos de Invierno - InsertOne 2.0",
        },
        {
            $set : {
                'name': "GOT - Vientos de Invierno - InsertOne 2.1",
            }
        }
    );

    db.books.updateMany(
        {
            'name': "GOT - Vientos de Invierno - InsertOne 2.1",
        },
        {
            $set : {
                'name': "GOT - Vientos de Invierno - InsertOne 2.2",
                'age': 2017
            }
        }
    );

    //*** Borrar

    db.books.deleteOne({
        '_id': ObjectId("5f45596ea55825fbec49366f"),
    })

    db.books.deleteMany({
        'name': "GOT - Vientos de Invierno - InsertOne 2.2",
    })
    ```
2. Commit Video 024:
    + $ git add .
    + $ git commit -m "Commit 024: Consultas CRUD a realizar"
    + $ git push -u origin main

## Sección 04: Primeros pasos con Laravel y MongoDB

### Video 025. Introducción
+ **Contenido**: sobre la creación de un modelo para nuestros datos en MongoDB.
1. Commit Video 025:
    + $ git add .
    + $ git commit -m "Commit 025: Introducción"
    + $ git push -u origin main

### Video 026. Configurar la base de datos
1. Agregar los parámetros de configuración de MongoDB en el archivo de configuración **config\database.php**:
    ```php
    ≡
    return [
        ≡
        'connections' => [

            'mongodb' => [
                'driver' => 'mongodb',
                'host' => env('DB_HOST', '127.0.0.1'),
                'port' => env('DB_PORT', 27017),
                'database' => env('DB_DATABASE', 'laramongo'),
                'username' => env('DB_USERNAME', ''),
                'password' => env('DB_PASSWORD', ''),
                'options' => [
                    // here you can pass more settings to the Mongo Driver Manager
                    // see https://www.php.net/manual/en/mongodb-driver-manager.construct.php under "Uri Options" for a list of complete parameters that you can use
            
                    'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'), // required with Mongo 3+
                ],
            ],

            'sqlite' => [
                ≡
            ],
            ≡
        ],
        ≡
    ];
    ```
2. Configurar las variables de entorno de baso de datos del archivo **.env** para establecer MongoDB como base de datos:
    ```php
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=laramongo
    DB_USERNAME=
    DB_PASSWORD=
    ```
    + **Nota**: La base de datos de MongoDB se creará sola cuando se ejecute la primera inserción en ella, por tal motivo no tendremos que crearla previamente.
3. Commit Video 026:
    + $ git add .
    + $ git commit -m "Commit 026: Configurar la base de datos"
    + $ git push -u origin main

### Video 027. Crear un Modelo
1. Crear controlador para administrar un CRUD de libros:
    + $ php artisan make:controller Dashboard/BookController -m Book
2. Modificar el model **app\Models\Book.php** para adaptarlo a MongoDB:
    ```php
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Book extends Model
    {
        use HasFactory;

        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title', 'description', 'age'];
        protected $collection = 'books_collection';
    }
    ```
3. Commit Video 027:
    + $ git add .
    + $ git commit -m "Commit 027: Crear un Modelo"
    + $ git push -u origin main

### Video 028. Realizar operaciones CRUD
1. Modificar la ruta raíz para probar el modelo **Book**:
    ```php
    Route::get('/', function () {

        /*** OPERACIONES PRINCIPALES PARA UN CRUD ***/


        /*** CREAR (C) ***/

        /* Book::create([
            'title' => 'Cualquier cosa',
            'description' => 'Soluciones++'
        ]); */


        /*** BUSCAR (R) ***/

        // Obtener todos los documentos
        /* $books = Book::all(); */

        // Obtner todos los documentos con la clave title = 'Cualquier cosa'
        /* $books = Book::where('title','Cualquier cosa')->get(); */

        // Obtner todos los documentos con la clave description no null
        /* $books = Book::where('title','Cualquier cosa')->whereNotNull('description')->get(); */

        // Obtner todos los documentos con la clave description null
        /* $books = Book::where('title','Cualquier cosa')->whereNull('description')->get(); */

        // Obtner la consulta SQL
        /* $books = Book::where('title','Cualquier cosa')->whereNull('description')->toSql(); */

        // Obtener el docomento con _id = 61701f2e59670000c5004b45
        /* $books = Book::find('61701f2e59670000c5004b45'); */


        /*** ACTUALIZAR (U) ***/

        // Actualizar el docomento con _id = 61701f2e59670000c5004b45
        /* $books = Book::find('61701f2e59670000c5004b45');
        $books->update([
            'title' => 'Cualquier cosa 2',
            'description' => 'Soluciones++ 3',
            'age' => 2021
        ]); */

        /*** ELIMINAR (D) ***/

        // Eliminar el docomento con _id = 61701f2e59670000c5004b45
        /* $books = Book::find('61701f2e59670000c5004b45');
        $books->delete(); */


        /*** OTRAS OPERACIONES ***/
        // Actualizar un documento y luego incrementar el valor de una clave
        /* $books = Book::find('6170265f59670000c5004b48');
        $books->update([
            'title' => 'Cualquier cosa 2',
            'description' => 'Soluciones++ 3',
            'age' => 2021
        ]);
        $books = Book::find('6170265f59670000c5004b48')->increment('age');
        dd(Book::find('6170265f59670000c5004b48')); */

        /* dd($books); */

        return view('welcome');
    });
    ```
2. Commit Video 028:
    + $ git add .
    + $ git commit -m "Commit 028: Realizar operaciones CRUD"
    + $ git push -u origin main

### Nota 029. Tarea
1. **Tarea**: Como Tarea debes de realizar las mismas operaciones tipo CRUD que vimos anteriormente e intenta agregar o variar algunas condiciones en cualquier tipo de consulta, variar los parámetros al momento de obtener datos, actualizarlos, insertarlos etc.
2. Commit Nota 029:
    + $ git add .
    + $ git commit -m "Commit 029: Tarea"
    + $ git push -u origin main

### Nota 030. Operaciones CRUD realizadas
1. Operaciones CRUD realizadas:
    ```php
    /*
    //*** Crear documentos (libros)

    // crear con algunos parametros
    Book::create(
        ['title' =>"the witcher"]
    );
    Book::create(
        ['title' =>"the witcher",'description' => "Hola Mundo"]
    );

    // Buscar por where
    //$books = Book::where('title', "Cualquier cosa")->get(); 
    
    // buscar libros dado algunas condiciones
    $books = Book::where('title', "the witcher")
    //->whereNotNull('description')
    ->whereNull('description')
    //->toSql(); // ver SQL de la consulta
    ->get(); 
    // $books = Book::all(); obtener todos los documentos de la coleccion
    //dd($books);

    // buscar por ID del documento
    $b = Book::find('5f47fde040090000c500688f')->increment('age');

    // actualizar libro seleccionado
    $b->update(['title' =>"the witcher 2.0", 'age' => 2017]);

    // borrar libro seleccionado
    $b->delete();

    // encontrar por ID
    $b = Book::find('5f47fde040090000c500688f');
    */
    ```
2. Commit Nota 030:
    + $ git add .
    + $ git commit -m "Commit 030: Operaciones CRUD realizadas"
    + $ git push -u origin main

## Sección 05: Crear un CRUD de libros con Laravel y MongoDB

### Video 031. Introducción
+ **Contenido**: muestra de la aplicación CRUD a desarrollar en esta sección.
1. Commit Video 031:
    + $ git add .
    + $ git commit -m "Commit 031: Introducción"
    + $ git push -u origin main

### Video 032. Instalar LaravelUI
+ https://laravel.com/docs/7.x/frontend
1. Instalar Laravel UI:
    + $ composer require laravel/ui:^2.4
2. Commit Video 032:
    + $ git add .
    + $ git commit -m "Commit 032: Instalar LaravelUI"
    + $ git push -u origin main

### Video 033. Configurar nuestro proyecto con LaravelUI (Bootstrap)
1. Instalar Bootstrap:
    + $ php artisan ui bootstrap --auth
    + $ npm install
    + $ npm run dev
2. Commit Video 033:
    + $ git add .
    + $ git commit -m "Commit 033:  Configurar nuestro proyecto con LaravelUI (Bootstrap)"
    + $ git push -u origin main

### Video 034. Opcional: Usar Bootstrap 5
+ **NOTA**: Para este proyecto no se ejecutaron estos pasos
+ https://getbootstrap.com/
1. Eliminar las dependencias: **"bootstrap": "^4.6.0"** y **"jquery": "^3.6"** en **package.json**.
2. Ejecutar:
    + $ npm install bootstrap
3. Modificar **resources\js\app.js**:
    ```js
    const bootstrap = require('bootstrap');
    ```
4. Ejecutar:
    + $ npm run dev
5. Commit Video 034:
    + $ git add .
    + $ git commit -m "Commit 034: Opcional: Usar Bootstrap 5"
    + $ git push -u origin main

### Video 035. Opcional: Instalar FontAwesome
+ https://fontawesome.com/
1. Instalar Font Awesome:
    + $ npm install --save @fortawesome/fontawesome-free
2. Incluir los estilos de Font Awesome en **resources\sass\app.scss**:
    ```scss
    // Font Awesome
    @import '~@fortawesome/fontawesome-free/scss/fontawesome.scss';
    @import '~@fortawesome/fontawesome-free/scss/brands.scss';
    @import '~@fortawesome/fontawesome-free/scss/solid.scss';
    ```
3. Ejecutar:
    + $ npm run dev
4. Commit Video 035:
    + $ git add .
    + $ git commit -m "Commit 035: Opcional: Instalar FontAwesome"
    + $ git push -u origin main

### Video 036. Registrar un usuario
1. Modificar el modelo **app\Models\User.php** para realizar adaptaciones con MongoDB:
    ```php
    <?php

    namespace App\Models;

    ≡
    /* use Illuminate\Foundation\Auth\User as Authenticatable; */
    use Jenssegers\Mongodb\Auth\User as Authenticatable;
    ≡
    ```
2. Commit Video 036:
    + $ git add .
    + $ git commit -m "Commit 036: Registrar un usuario"
    + $ git push -u origin main

### Video 037. Crear template maestro
1. Diseñar plantilla maestra **resources\views\dashboard\master.blade.php**:
    ```php
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('dashboard.partials.nav-header-main')
        <div class="container">
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
    </html>
    ```
2. Diseñar plantilla de navegación **resources\views\dashboard\partials\nav-header-main.blade.php**:
    ```php
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    ```
3. Commit Video 037:
    + $ git add .
    + $ git commit -m "Commit 037: Crear template maestro"
    + $ git push -u origin main

### Video 038. CRUD: Crear lista de libros
1. Modificar el archivo de rutas **routes\web.php**:
    ```php
    <?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('dashboard/book', 'Dashboard\BookController');
    ```
2. Programar el método **index** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function index()
    {
        $books = Book::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.book.index', compact('books'));
    }
    ```
3. Diseñar vista **resources\views\dashboard\book\index.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Creación</th>
                    <th>Actualización</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->_id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->created_at->format('d-m-Y') }}</td>
                        <td>{{ $book->updated_at->format('d-m-Y') }}</td>
                        <td>{{ $book->age }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $books->links() }}
    @endsection
    ```
5. Commit Video 038:
    + $ git add .
    + $ git commit -m "Commit 038: CRUD: Crear lista de libros"
    + $ git push -u origin main

### Video 039. CRUD: Crear libros
1. Programar el método **create** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function create()
    {
        $book = new Book();
        return view('dashboard.book.create', compact('book'));
    }
    ```
2. Programar el método **store** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function store(Request $request)
    {
        Book::create($request->all());
        return back()->with('status', 'Libro creado correctamente');
    }
    ```
3. Diseñar vista **resources\views\dashboard\book\create.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="mt-3 card">
            <div class="card-header">
                Crear libro
            </div>
            <div class="card-body">
                <form action="{{ route('book.store') }}" method="post">
                    @include('dashboard.book._form')
                    <input type="submit" value="Enviar" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    @endsection   
    ```
4. Diseñar formulario para libros **resources\views\dashboard\book\_form.blade.php**:
    ```php
    @csrf
    <label for="title">Título</label>
    <input name="title" id="title" type="text" class="form-control" value="{{ old('title', $book->title ) }}">

    <label for="age">Año</label>
    <input name="age" id="age" type="numeric" class="form-control" value="{{ old('age', $book->age ) }}">

    <label for="description">Descripción</label>
    <textarea name="description" id="description" class="form-control" cols="30" rows="10">
        {{ old('description', $book->description ) }}
    </textarea>
    ```
5. Commit Video 039:
    + $ git add .
    + $ git commit -m "Commit 039: CRUD: Crear libros"
    + $ git push -u origin main

### Video 040. CRUD: Mostrar mensaje de éxito
1. Crear plantilla **resources\views\dashboard\partials\alert-message.blade.php**:
    ```php
    @if (session('status'))
        <div class="alert alert-success my-2">
            {{ session('status') }}
        </div>
    @endif
    ```
2. Modificar plantilla **resources\views\dashboard\master.blade.php** para incluir los mensajes de notificación:
    ```php
    ≡
    <body>
        ≡
        <div class="container">
            @include('dashboard.partials.alert-message')
            ≡
        </div>
        <!-- Scripts -->
        ≡
    </body>
    ≡
    ```
3. Commit Video 040:
    + $ git add .
    + $ git commit -m "Commit 040: CRUD: Mostrar mensaje de éxito"
    + $ git push -u origin main

### Video 041. CRUD: Validaciones
1. Crear request para validar los datos de los libros:
    + $ php artisan make:request SaveBook
2. Programar el nuevo request **app\Http\Requests\SaveBook.php**:
    ```php
    ≡
    class SaveBook extends FormRequest
    {
        ≡
        public function authorize()
        {
            return true;
        }

        ≡
        public function rules()
        {
            return $this->myRules();
        }

        public function myRules(){
            return [
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:2000',
                'age' => 'required|integer',
            ];
        }
    }
    ```
3. Modificar el método **store** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function store(SaveBook $request)
    {
        Book::create($request->validated());
        return back()->with('status', 'Libro creado correctamente');
    }
    ```
    + Importar la definición del request **SaveBook**:
    ```php
    use App\Http\Requests\SaveBook;
    ```
4. Crear plantilla **resources\views\dashboard\partials\errors-form.blade.php**:
    ```php
    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="alert alert-danger m-b-2">
                {{ $e }}
            </div>  
        @endforeach
    @endif
    ```
5. Modificar vista **resources\views\dashboard\book\create.blade.php** para incluir los mensajes de error:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="mt-3 card">
            ≡
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('book.store') }}" method="post">
                    ≡
                </form>
            </div>
        </div>
    @endsection
    ```
6. Commit Video 041:
    + $ git add .
    + $ git commit -m "Commit 041: CRUD: Validaciones"
    + $ git push -u origin main

### Video 042. CRUD: Editar libros



### Video 043. CRUD: Enlaces CRUD en el index
### Video 044. CRUD Eliminar libros
### Video 045. Algunos detalles en la aplicación
### Nota 046. Código fuente






    ≡
    ```php
    ```

## Comandos Git:
+ Historial de commit:
    + git log --pretty=oneline
+ Borrar ultimo commit:
    + git reset HEAD^ --soft
+ Forzar push
    + git push origin -f

## Conectar MongoDB con PHP utilizando XAMPP y Composer:
1. Ir a https://www.mongodb.com/try/download/community
2. Descargar e instalar la versión actual de MongoDB para tu SO.
3. Iniciar los servicios de MongoDB ejecutano en una terminal:
    + mongod
4. Anexar la siguiente ruta a las variables de entorno de Windows:
    + C:\Program Files\MongoDB\Server\5.0\bin
5. Ir a https://pecl.php.net/package/mongodb y descargar la DLL (**X:X Thread Safe (TS) x64**) de la versión más actual y estable.
6. Descomprimimos la descargas y movemos el archivo **php_mongodb.dll** a **C:\xampp\php\ext** el resto de la descarga lo borramos.
7. Modificar el archivo de configuración **C:\xampp\php\php.ini** para agregar la extensión de MongoDB **extension=php_mongodb.dll**:
    ```ini
    ≡
    ;extension=soap
    ;extension=sockets
    ;extension=sodium
    ;extension=sqlite3
    ;extension=tidy
    ;extension=xmlrpc
    ;extension=xsl
    extension=php_mongodb.dll

    ;;;;;;;;;;;;;;;;;;;
    ; Module Settings ;
    ;;;;;;;;;;;;;;;;;;;
    ≡
    ```
8. Para probar la correcta instalación:
    + Crear archivo **C:\xampp\htdocs\test.php**:
        ```php
        <?php
            echo phpinfo();
        ?>
        ```
    + En un navegador escribimos la siguiente ruta:
        + http://localhost/test.php
            + **Nota**: verificar que este encendido el servidor **Apache** de **XAMPP**.
        + **Nota**: si todo salio bien debe aparecer el servicio de mongodb en la página.
9. Ir a https://getcomposer.org y descargar e instalar Composer.
    + **Nota**: verificar que la ruta completa de PHP sea:
        + C:\xampp\php\php.exe
10. Ejeuctar la siguiente instrucción para todos aquellos proyectos que requieran de MongoDB:
    + $ composer require mongodb/mongodb

## Conectar MongoDB con PHP utilizando Laragon y Composer:
1. Ir a https://www.mongodb.com/try/download/community
2. Descargar en formato **zip** la versión actual de MongoDB para tu SO.
3. Descomprimir la descarga y extraer la carpeta **bin** (lo demás se puede eliminar).
4. Renombrar la carpeta **bin** a **mongodb-[versión]** (Ejm.: **mongodb-5.03**) y ubicarla en:
    + C:\laragon\bin\mongodb
5. En laragon ir a **Menú > MongoDB** y cambiar la versión a la nueva.
5. Anexar la siguiente ruta a las variables de entorno de Windows:
    + C:\laragon\bin\mongodb\mongodb-[versión]
6. Ir a https://pecl.php.net/package/mongodb y descargar la DLL (**X:X Thread Safe (TS) x64**) de la versión más actual y estable.
7. Descomprimimos la descargas y movemos el archivo **php_mongodb.dll** a **C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\ext** el resto de la descarga lo borramos.
8. Modificar el archivo de configuración **C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\php.ini** para agregar la extensión de MongoDB **extension=php_mongodb.dll**:
    ```ini
    ≡
    ;extension=soap
    ;extension=sockets
    ;extension=sodium
    ;extension=sqlite3
    ;extension=tidy
    ;extension=xmlrpc
    extension=xsl
    extension=php_mongodb.dll

    ;;;;;;;;;;;;;;;;;;;
    ; Module Settings ;
    ;;;;;;;;;;;;;;;;;;;
    ≡
    ```
9.  Para probar la correcta instalación:
    + Crear archivo **C:\laragon\www\test\test.php**:
        ```php
        <?php
            echo phpinfo();
        ?>
        ```
    + En un navegador escribimos la siguiente ruta:
        + http://test.test
            + **Nota**: verificar que esten levantados los servicios de **Laragon**.
        + **Nota**: si todo salio bien debe aparecer el servicio de mongodb en la página.
10. Ir a https://getcomposer.org y descargar e instalar Composer.
    + **Nota**: verificar que la ruta completa de PHP sea:
        + C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\php.exe
11. Ejeuctar la siguiente instrucción para todos aquellos proyectos que requieran de MongoDB:
    + $ composer require mongodb/mongodb
