<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_voluntario".
 *
 * @property string $id_voluntario
 * @property string $id_localidad
 * @property string $txt_nombre_completo
 * @property string $txt_email
 *
 * @property EntNecesidades[] $entNecesidades
 * @property EntLocalidades $idLocalidad
 */
class EntVoluntario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_voluntario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_localidad', 'txt_nombre_completo', 'txt_email'], 'required', 'message' => 'Campo requerido'],
            [['id_localidad'], 'integer'],
            [['txt_nombre_completo', 'txt_email'], 'string', 'max' => 200],
            [['txt_email'], 'unique', 'message'=>'El email ingresado ya es un voluntario'],
            [['id_localidad'], 'exist', 'skipOnError' => true, 'targetClass' => EntLocalidades::className(), 'targetAttribute' => ['id_localidad' => 'id_localidad']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_voluntario' => 'Id Voluntario',
            'id_localidad' => 'Localidad',
            'txt_nombre_completo' => 'Nombre Completo',
            'txt_email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntNecesidades()
    {
        return $this->hasMany(EntNecesidades::className(), ['id_voluntario' => 'id_voluntario']);
    }

    
   /** 
    * @return \yii\db\ActiveQuery 
    */ 
   public function getRelVoluntariosLocalidades() 
   { 
       return $this->hasMany(RelVoluntariosLocalidades::className(), ['id_voluntario' => 'id_voluntario']); 
   } 

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLocalidad()
    {
        return $this->hasOne(EntLocalidades::className(), ['id_localidad' => 'id_localidad']);
    }
}
