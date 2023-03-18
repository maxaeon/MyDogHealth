const { Model, DataTypes } = require('sequelize');
const sequelize = require('../config/connection');

class Food extends Model { }

Food.init(

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
      
         brand: {
            type: DataTypes.STRING,
            allowNull: true,
        },   

        amount : {
            type: DataTypes.STRING,
            allowNull: true,
        },

        frequency: {
            type: DataTypes.STRING,
            allowNull: true,
        },

        fixed: {
            type: DataTypes.STRING,
            allowNull: true,
        },

        treatorfood: {
            type: DataTypes.STRING,
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
        modelName: 'food',
    }
);

module.exports = Food;
