const { Model, DataTypes } = require('sequelize');
const sequelize = require('../config/connection');

class Dog extends Model { }

Dog.init(

    {
        id: {
            type: DataTypes.INTEGER,
            allowNull: false,
            primaryKey: true,
            autoIncrement: true,
        },

        name: {
            type: DataTypes.STRING,
            allowNull: true,
        },
      
         birthdate: {
            type: DataTypes.DATE,
            allowNull: true,
            defaultValue: DataTypes.NOW,
        },   

        breed: {
            type: DataTypes.STRING,
            allowNull: true,
        },

        sex: {
            type: DataTypes.STRING,
            allowNull: true,
        },

        fixed: {
            type: DataTypes.STRING,
            allowNull: true,
        },

        weightInLbs: {
            type: DataTypes.INTEGER,
            allowNull: true,
        },

        microchip: {
            type: DataTypes.INTEGER,
            allowNull: true,
        },

        notes: {
            type: DataTypes.STRING,
            allowNull: true,
        },
      
        user_id: {
            type: DataTypes.INTEGER,
            references: {
                model: 'user',
                key: 'id',
            },
        }
    },
    {
        sequelize,
        timestamps: false,
        freezeTableName: true,
        underscored: true,
        modelName: 'dog',
    }
);

module.exports = Dog;
