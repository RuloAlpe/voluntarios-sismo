<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_necesidades".
 *
 * @property string $id_necesidad
 * @property string $id_localidad
 * @property string $id_voluntario
 * @property string $txt_necesidad
 * @property integer $num_elementos
 *
 * @property EntLocalidades $idLocalidad
 * @property EntVoluntario $idVoluntario
 */
class EntNecesidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_necesidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_localidad', 'id_voluntario', 'txt_necesidad', 'num_elementos'], 'required'],
            [['id_localidad', 'id_voluntario', 'num_elementos'], 'integer'],
            [['txt_necesidad'], 'string', 'max' => 500],
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
            'id_necesidad' => 'Id Necesidad',
            'id_localidad' => 'Id Localidad',
            'id_voluntario' => 'Id Voluntario',
            'txt_necesidad' => 'Describe brevemente lo que se requiere',
            'num_elementos' => 'Especifíca una cantidad de cosas , 0 si es servicio ',
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
