const { Model, DataTypes } = require('sequelize');
const sequelize = require('../config/connection');

class Condition extends Model { }

Condition.init(

    {
        id: {
            type: DataTypes.INTEGER,
            allowNull: false,
            primaryKey: true,
            autoIncrement: true,
        },

        condition: {
            type: DataTypes.STRING,
            allowNull: true,
        },
      
         datediagnosed: {
            type: DataTypes.DATE,
            allowNull: true,
            defaultValue: DataTypes.NOW,
        }, 
        
        primarydoctor : {
            type: DataTypes.STRING,
        },

        treatmentplan: {
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
        modelName: 'condition',
    }
);

module.exports = Condition;
