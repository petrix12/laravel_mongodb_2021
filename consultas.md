# Comando comunes MongoDB
## Ejecutar MongoDB:
+ $ mongo

## Salir de la consola de MongoDB:
+ > exit

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

## Comandos para crear documentos:
+ db.collection.insert()
+ db.collection.insertOne()
+ db.collection.insertMany()

### Crear colección **books** con el documento **book1**:
+ db.books.insertOne(book1)

### Crear los documentos book2 y book3:
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

### Incluir los documentos **book2** y **book3** en la colección **books**:
+ db.books.insertMany([book2, book3])

### Instrucciones equivalente para insertar book1, book2 y book3 en la colección books:
+ db.books.insert(book1)            (equivalente a db.books.insertOne(book1))
+ db.books.insert([book2, book3])   (equivalente a db.books.insertMany([book2, book3]))

## Comandos para mostrar documentos:
+ db.collection.find()
+ db.collection.findOne()
+ db.collection.findMany()

### Mostrar todos los documentos de la colección **books**:
+ db.books.find()

### Obtener un documento de la colección **books**:
+ db.books.findOne()

### Obtener un documento de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal**:
```js
db.books.findOne(
    {
        'name': "Harry Potter y La Piedra Filosofal"
    }
)
```
### Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal**:
```js
db.books.find(
    {
        'name': "Harry Potter y La Piedra Filosofal"
    }
)
```
### Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal** pero que regrese solamente la clave **name**:
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

### Obtener documentos de una manera más legible:
+ db.books.find().pretty()

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

### Actualizar el documento por _id:
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

### Actualizar el documento por name:
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

### Actualizar y agregar clave a documento:
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

## Comandos para eliminar documentos:
+ db.collection.deleteOne()
+ db.collection.deleteMany()

### Eliminar documento por _id:
```js
db.books.deleteOne(
    {
        '_id' : ObjectId("616f6d98e52184190e6f0c7f")
    }
)
```
## Operadores lógicos y de comparación:

```js
db.inventory.insertMany([
    { item: "journal", qty: 25, size: { h: 14, w: 21, uom: "cm" }, status: "A" },
    { item: "notebook", qty: 50, size: { h: 8.5, w: 11, uom: "in" }, status: "A" },
    { item: "paper", qty: 100, size: { h: 8.5, w: 11, uom: "in" }, status: "D" },
    { item: "planner", qty: 75, size: { h: 22.85, w: 30, uom: "cm" }, status: "D" },
    { item: "postcard", qty: 45, size: { h: 10, w: 15.25, uom: "cm" }, status: "A" },
    { item: "ps4", qty: 22, size: { h: 60, w: 35, uom: "cm" }, status: "A" },
    { item: "xbox", qty: 25, size: { h: 64, w: 35, uom: "cm" }, status: "B" },
 ]);
```

### Obtener todos los documentos que con qty mayor o igual a 25 y menor que 50, cuyo status se A
```js
db.inventory.find(
    {
        status: 'A',
        $and: [
            {
                qty: { $gte: 25}
            },
            {
                qty: { $lt: 50}
            }
        ]
    }
).pretty()
```
+ La siguiente expresión es equivalente a la anterior:
```js
db.inventory.find(
    {
        status: 'A',
        qty: { $gte: 25},
        qty: { $lt: 50}
    }
).pretty()
```


```js
```