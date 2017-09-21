<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_localidades".
 *
 * @property string $id_localidad
 * @property string $txt_nombre
 * @property integer $b_habilitado
 *
 * @property EntNecesidades[] $entNecesidades
 * @property EntVoluntario[] $entVoluntarios
 */
class EntLocalidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_localidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_nombre'], 'required'],
            [['b_habilitado'], 'integer'],
            [['txt_nombre'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_localidad' => 'Id Localidad',
            'txt_nombre' => 'Ubicación de la zona',
            'b_habilitado' => 'Indica con un 1 si esta activa y 0 si ya no esta activa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntNecesidades()
    {
        return $this->hasMany(EntNecesidades::className(), ['id_localidad' => 'id_localidad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntVoluntarios()
    {
        return $this->hasMany(EntVoluntario::className(), ['id_localidad' => 'id_localidad']);
    }
}
