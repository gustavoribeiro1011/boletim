<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "falta".
 *
 * @property integer $id
 * @property integer $falta
 * @property string $materia
 */
class Falta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'falta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['falta', 'materia'], 'required'],
            [['falta'], 'integer'],
            [['materia'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'falta' => 'Falta',
            'materia' => 'Materia',
        ];
    }
}
