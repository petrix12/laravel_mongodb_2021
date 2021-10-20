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

## Obtener un documento de la colección **books**:
+ db.books.findOne()

## Obtener un documento de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal**:
```js
db.books.findOne(
    {
        'name': "Harry Potter y La Piedra Filosofal"
    }
)
```
## Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal**:
```js
db.books.find(
    {
        'name': "Harry Potter y La Piedra Filosofal"
    }
)
```
## Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal** pero que regrese solamente la clave **name**:
```js
db.books.find(
    {
        'name': "Harry Potter y La Piedra Filosofal"
    }, 
    {
        'name': true
    }
)
```
## Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal** pero que regrese solamente la clave **name** y que no aparezca la clave **_id**:
```js
db.books.find(
    {
        'name': "Harry Potter y La Piedra Filosofal"
    },
    {
        'name': true, 
        '_id': false
    }
)
```
## Comandos para actualizar documentos:
+ db.collection.updateOne()
+ db.collection.updateMany()
+ db.collection.replaceOne()

## Actualizar el documento por _id:
```js
db.books.updateOne(
    {
        '_id' : ObjectId("616f6d98e52184190e6f0c7f")
    },
    {
        $set: {
            'name': "Harry Potter y el prisionero de Azcaban"
        }
    }
)
```

## Actualizar el documento por name:
```js
db.books.updateMany(
    {
        'name': "Harry Potter y La Cámara Secrete"
    },
    {
        $set: {
            'name': "Harry Potter y la Orden del Fénix"
        }
    }
)
```

## Actualizar y agregar clave a documento:
```js
db.books.updateMany(
    {
        'name': "Harry Potter y la Orden del Fénix"
    },
    {
        $set: {
            'name': "Harry Potter y la Orden del Fénix 3.0",
            'age': 2004
        }
    }
)
```



```js
```