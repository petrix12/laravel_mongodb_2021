// bases de datos
show databases; // mostrar base de datos
show dbs; // variacion comando anterior

use crud; // usar o establecer base de datos

// colecciones
show collections // mostrar colecciones/tablas de la base de datos seleccionada

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
});


// query y proyecciones
db.books.find({
    '_id': ObjectId("5f455708a55825fbec49366c"),
    'name': "GOT - Vientos de Invierno - InsertOne",
}, {
    'name': true,
    '_id': false
});

// **** Actualizar

db.books.updateOne({
    '_id': ObjectId("5f45596ea55825fbec49366f"),
}, {
    $set: {
        'name': "GOT - Vientos de Invierno - InsertOne 2.0",
    }
});

db.books.updateMany({
    'name': "GOT - Vientos de Invierno - InsertOne 2.0",
}, {
    $set: {
        'name': "GOT - Vientos de Invierno - InsertOne 2.1",
    }
});

db.books.updateMany({
    'name': "GOT - Vientos de Invierno - InsertOne 2.1",
}, {
    $set: {
        'name': "GOT - Vientos de Invierno - InsertOne 2.2",
        'age': 2017
    }
});

//*** Borrar

db.books.deleteOne({
    '_id': ObjectId("5f45596ea55825fbec49366f"),
})

db.books.deleteMany({
    'name': "GOT - Vientos de Invierno - InsertOne 2.2",
})



//**** OPERADORES logicos y comparacion */

db.inventory.insertMany([{
        item: "journal",
        qty: 25,
        size: {
            h: 14,
            w: 21,
            uom: "cm"
        },
        status: "A"
    },
    {
        item: "notebook",
        qty: 50,
        size: {
            h: 8.5,
            w: 11,
            uom: "in"
        },
        status: "A"
    },
    {
        item: "paper",
        qty: 100,
        size: {
            h: 8.5,
            w: 11,
            uom: "in"
        },
        status: "D"
    },
    {
        item: "planner",
        qty: 75,
        size: {
            h: 22.85,
            w: 30,
            uom: "cm"
        },
        status: "D"
    },
    {
        item: "postcard",
        qty: 45,
        size: {
            h: 10,
            w: 15.25,
            uom: "cm"
        },
        status: "A"
    },
    {
        item: "ps4",
        qty: 22,
        size: {
            h: 60,
            w: 35,
            uom: "cm"
        },
        status: "A"
    },
    {
        item: "xbox",
        qty: 25,
        size: {
            h: 64,
            w: 35,
            uom: "cm"
        },
        status: "B"
    },
]);


db.inventory.find().pretty()

db.inventory.find({
    status: 'A'
}).pretty()


db.inventory.find({
    $and: [{
            qty: {
                $gte: 25
            }
        },
        {
            qty: {
                $lt: 50
            }
        },
    ]
}).pretty()


db.inventory.find({
    status: 'A',
    $and: [{
            qty: {
                $gte: 25
            }
        },
        {
            qty: {
                $lt: 50
            }
        },
    ]
}).pretty()


db.inventory.find({
    status: 'A',
    qty: {
        $gte: 25
    },
    qty: {
        $lt: 50
    }

}).pretty()


db.inventory.find({
    status: 'A',
    $or: [{
            qty: {
                $gte: 25
            }
        },
        {
            qty: {
                $lt: 50
            }
        },
    ]
}).pretty()

db.inventory.find({
    status: {
        $in: ["A", "D"]
    }
})





//*** RELACIONES DOCUMENTOS

var user1 = {
    name: 'Andres',
    last_name: 'Cruz',
    age: 29,
    email: 'andres@gmail.com',
    nationalities: ['Venezuela', 'España'],
    address: {
        postal: 900,
        country: "España",
        dir: "Apple Puerta del Sol",
        phone: "+34 917 69 91 00"
    }
};

var user2 = {
    name: 'Pepe',
    last_name: 'Cruz',
    age: 18,
    email: 'pepe@gmail.com',
    nationalities: ['España'],
    address: {
        postal: 150,
        country: "España",
        dir: "Apple Puerta de la Luna",
        phone: "+34 917 69 91 11"
    }
};

var user3 = {
    name: 'Pablo',
    last_name: 'Lama',
    age: 30,
    email: 'pablo@gmail.com',
    courses: ['Java', 'Git', 'JavaScript']
};

var user4 = {
    name: 'Luis',
    last_name: 'Yello',
    age: 99,
    email: 'pepe@gmail.com'
};

var user5 = {
    name: 'Andres',
    last_name: 'Cruz',
    age: 29,
    email: 'andres@gmail.com',
    address: [{
            country: "España",
            dir: "Gran Plaza 2",
            phone: "+34 916 34 97 00"
        },
        {
            country: "España",
            dir: "Apple Calle Colón",
            phone: "+34 963 50 63 00"
        },
        {
            country: "España",
            dir: "La Cañada Shopping",
            phone: "+34 952 76 08 00"
        },
        {
            country: "Venezuela",
            dir: "...",
            phone: "+58 952 76 08 00"
        },
    ]
};

db.users.insertMany(
    [user1, user2, user3, user4, user5]
);

db.users.find({
    "address.postal": 900
}).pretty()

db.users.find({

    $and: [{
            "address.postal": 900
        },
        {
            "address.postal": 150
        }
    ]

}).pretty()

db.users.find({

    $or: [{
            "address.postal": 900
        },
        {
            "address.postal": 150
        }
    ]

}).pretty()


db.users.find({

    $and: [{
            "address.postal": {
                $gte: 150
            }
        },
        {
            "address.postal": {
                $lt: 1000
            }
        }
    ]

}).pretty()

db.users.find({
    "address.phone": "+34 952 76 08 00"
}).pretty()

//**** Actualizar documentos embebidos

db.users.find({
    "address.phone": "+34 952 76 08 00",
    "name": "Andres"
}).pretty()


// actualizar documento one to many por ID
db.users.updateOne({
    "address.phone": "+34 952 76 08 00",
    "name": "Andres"
}, {
    $set: {
        last_name: "Cruz 2",
        "address.1.country": "Mexico"
    }
})

// actualizar documento one to many por query
db.users.updateOne({
    "address.phone": "+34 952 76 08 00",
    "name": "Andres"
}, {
    $set: {
        last_name: "Cruz 2",
        "address.$.country": "Argentina"
    }
})

// actualizar documento one to one

db.users.updateOne({
    "_id": ObjectId("5f4d44116fdf9b4e626d6fe4")
}, {
    $set: {
        last_name: "Cruz 2",
        "address.phone": "+34 917 69 91 11",
        "address.postal": 901,
    }
})


// remover documento embebido

db.users.updateOne({
    "address.phone": "+34 952 76 08 00",
    "name": "Andres"
}, {
    $pull: {
        address: {
            "phone": "+34 952 76 08 00"
        }
    }
})

// agregar documento embebido
db.users.updateOne({
    "_id" : ObjectId("5f4d44116fdf9b4e626d6fe8"),
}, {
    $push: {
        address: {
            country: "España 2",
            dir: "Apple Calle Colonito",
            phone: "+34 963 50 63 55"
        },
    }
})



//**** Relaciones en Mongo DB con Referencias de Documentos 

freezer = {
    name: "freezer",
    ki: 160000
};

cell = {
    name: "cell",
    ki: 1100000
};

buu = {
    name:"buu",
    ki: 1000000
};

db.villain.insertMany(
    [cell, freezer, buu]
);

db.villain.find().pretty()


gohan = {
    name: "gohan",
    killed: ObjectId("5f4e83d5403ddc735d8229bd")
};

goku = {
    name: "goku",
    killed: [ ObjectId("5f4e83d5403ddc735d8229bc"), ObjectId("5f4e83d5403ddc735d8229be") ]
};

db.hero.insertMany([gohan, goku])

var gohan = db.hero.findOne(
    {
        _id : ObjectId("5f4e8477403ddc735d8229bf")
    }
).pretty()

db.villain.find(
    {
        _id: gohan.killed
    }
).pretty()


var goku = db.hero.findOne(
    {
        _id : ObjectId("5f4e8477403ddc735d8229c0")
    }
).pretty()

db.villain.find(
    {
        _id: {$in:goku.killed}
    }
).pretty()


// JOIN

db.hero.aggregate(
    {
        $lookup : {
            from: "villain",
            localField: "killed",
            foreignField: "_id",
            as:"exit"
        }
    }
)