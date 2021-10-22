
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