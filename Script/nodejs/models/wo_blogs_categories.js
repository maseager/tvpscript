/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Wo_Blogs_Categories', {
    id: {
      autoIncrement: true,
      type: DataTypes.INTEGER,
      allowNull: false,
      primaryKey: true
    },
    lang_key: {
      type: DataTypes.STRING(160),
      allowNull: false,
      defaultValue: ""
    }
  }, {
    sequelize,
    tableName: 'Wo_Blogs_Categories'
  });
};
