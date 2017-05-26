<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nota".
 *
 * @property integer $id
 * @property integer $nota
 * @property string $materia
 */
class Nota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nota', 'materia'], 'required'],
            [['nota'], 'integer'],
            [['materia'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nota' => 'Nota',
            'materia' => 'Materia',
        ];
    }
}
