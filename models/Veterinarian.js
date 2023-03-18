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
      
        address: {
            type: DataTypes.STRING,
            allowNull: true,
        },

        patient: {
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
