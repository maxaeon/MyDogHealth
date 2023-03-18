const { Model, DataTypes } = require('sequelize');
const sequelize = require('../config/connection');

class Veterinarian extends Model { }

Veterinarian.init(

    {
        id: {
            type: DataTypes.INTEGER,
            allowNull: false,
            primaryKey: true,
            autoIncrement: true,
        },

        clinic: {
            type: DataTypes.STRING,
            allowNull: true,
        },
       
        doctor: {
            type: DataTypes.STRING,
            allowNull: true,
        },
      
        date: {
            type: DataTypes.DATE,
            allowNull: true,
            defaultValue: DataTypes.NOW,
        },   

        timehour: {
            type: DataTypes.INTEGER,
            allowNull: true,
        }, 
        
        timeminute: {
            type: DataTypes.INTEGER,
            allowNull: true,
        },
      

        location: {
            type: DataTypes.STRING,
            allowNull: true,
        },

        dog: {
            type: DataTypes.STRING,
            allowNull: true,
        },

        phone: {
            type: DataTypes.string,
            allowNull: true,
        },

        email: {
            type: DataTypes.string,
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
        modelName: 'Veterinarian',
    }
);

module.exports = Veterinarian;
