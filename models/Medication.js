const { Model, DataTypes } = require('sequelize');
const sequelize = require('../config/connection');

class Medication extends Model { }

Medication.init(

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
      
         startdate: {
            type: DataTypes.DATE,
            allowNull: true,
            defaultValue: DataTypes.NOW,
        },
      
        enddate: {
            type: DataTypes.DATE,
            allowNull: true,
            defaultValue: DataTypes.NOW,
        },   

        prescriber: {
            type: DataTypes.STRING,
            allowNull: true,
        },
        
        dose: {
            type: DataTypes.STRING,
            allowNull: true,
        },

        frequency: {
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
        modelName: 'medication',
    }
);

module.exports = Medication;
