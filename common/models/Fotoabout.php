<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fotoabout".
 *
 * @property int $ID
 * @property string $fotoabout
 * @property string $path
 */
class Fotoabout extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fotoabout';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fotoabout', ], 'required'],
            [['fotoabout'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'fotoabout' => 'Fotoabout',
            'path' => 'Path',
        ];
    }
}
