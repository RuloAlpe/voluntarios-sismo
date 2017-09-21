<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rel_voluntarios_localidades".
 *
 * @property string $id_voluntario
 * @property string $id_localidad
 *
 * @property EntLocalidades $idLocalidad
 * @property EntVoluntario $idVoluntario
 */
class RelVoluntariosLocalidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rel_voluntarios_localidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_voluntario', 'id_localidad'], 'required'],
            [['id_voluntario', 'id_localidad'], 'integer'],
            [['id_localidad'], 'exist', 'skipOnError' => true, 'targetClass' => EntLocalidades::className(), 'targetAttribute' => ['id_localidad' => 'id_localidad']],
            [['id_voluntario'], 'exist', 'skipOnError' => true, 'targetClass' => EntVoluntario::className(), 'targetAttribute' => ['id_voluntario' => 'id_voluntario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_voluntario' => 'Id Voluntario',
            'id_localidad' => 'Id Localidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLocalidad()
    {
        return $this->hasOne(EntLocalidades::className(), ['id_localidad' => 'id_localidad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdVoluntario()
    {
        return $this->hasOne(EntVoluntario::className(), ['id_voluntario' => 'id_voluntario']);
    }
}
