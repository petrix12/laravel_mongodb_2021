# Comando comunes MongoDB
## Ejecutar MongoDB:
+ $ mongo

## Ver las bases de datos:
+ show databases
+ show dbs

# Para ubicarnos en la base de datos **crud**.
+ use crud

## Para ver las colecciones de una base de datos:
+ show collections

## 1er esquema para crear una colección
```js
db.createCollection(<name>,
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
        writeConcern: <document>,
    }
)
```

## 2do esquema para crear una colección
```js
db.book.insert()
```

## Crear un documento Json
```js
var book1 = {
    'name': 'El señor de los anillos',
    'description': 'Libro de fantasia'
}
```
## Ver el documento **book1**:
+ book1

## Ver el name del documento **book1**:
+ book1.name

## Crear colección **books** con el documento **book1**:
+ db.books.insertOne(book1)

## Crear los documentos book2 y book3:
```js
var book2 = {
    'name': 'Harry Potter y La Piedra Filosofal',
    'description': 'Libro de fantasia'
}

var book3 = {
    'name': 'Harry Potter y La Cámara Secreta',
    'description': 'Libro de fantasia'
}
```

## Incluir los documentos **book2** y **book3** en la colección **books**:
+ db.books.insertMany([book2, book3])

## Instrucciones equivalente para insertar book1, book2 y book3 en la colección books:
+ db.books.insert(book1)            (equivalente a db.books.insertOne(book1))
+ db.books.insert([book2, book3])   (equivalente a db.books.insertMany([book2, book3]))

## Mostrar todos los documentos de la colección **books**:
+ db.books.find()


```js
```