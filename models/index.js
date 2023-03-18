// import all models
const User = require('./User');
const Dog = require('./Dog');
const Appointment = require('./Appointment');
const Veterinarian = require('./Veterinarian')
//const Post = require('./Post');
//const Comment = require('./Comment');
const Medication = require('./Medication')
const Food = require('./Food');
const Condition = require('./Condition');
// const Calendar = require('./Calendar');

// create associations
// One to many relationship
User.hasMany(Dog, {
    foreignKey: "user_id"
});

// One to one relationship
Dog.belongsTo(User, {
    foreignKey: "user_id",
    onDelete: "SET NULL"
});

User.hasMany(Veterinarian, {
    foreignKey: 'user_id'
})

Veterinarian.belongsTo(User, {
    foreignKey: 'user_id',
    onDelete: "SET NULL"
})

Dog.hasMany(Medication, {
    foreignKey: 'dog_id'
})

Medication.belongsTo(Dog, {
    foreignKey: 'dog_id',
    onDelete: "SET NULL"
})

User.hasMany(Appointment, {
    foreignKey: 'user_id'
})

Appointment.belongsTo(User, {
    foreignKey: 'user_id',
    onDelete: "SET NULL"
})

Dog.hasMany(Food, {
    foreignKey: 'dog_id'
})

Food.belongsTo(Dog, {
    foreignKey: 'dog_id',
    onDelete: "SET NULL"
})

Dog.hasMany(Condition, {
    foreignKey: 'dog_id'
})

Condition.belongsTo(Dog, {
    foreignKey: 'dog_id',
    onDelete: "SET NULL"
})

// we don't have to specify comment as a through table
// we don't need to access Post through Comment

/*Comment.belongsTo(User, {
    foreignKey: "user_id",
    onDelete: "SET NULL"
});

Comment.belongsTo(Post, {
    foreignKey: "post_id",
    onDelete: "SET NULL"
});

User.hasMany(Comment, {
    foreignKey: "user_id",
    onDelete: "SET NULL"
});

Post.hasMany(Comment, {
    foreignKey: "post_id"
});
*/

// Garden.hasOne(Calendar, {
//     foreignKey: 'garden_id',
//     onDelete: 'SET NULL'
// })

// Calendar.belongsTo(Garden, {
//     foreignKey: 'garden_id',
//     onDelete: 'SET NULL'
// })


module.exports = { User, Dog, Appointment, Veterinarian, Medication, Food, Condition  };
