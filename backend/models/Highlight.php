<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "highlight".
 *
 * @property int $ID
 * @property string $fotohighlight
 * @property string $path
 * @property string $namaproduk
 */
class Highlight extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'highlight';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'namaproduk',  'path'], 'string', 'max' => 255],

            // tanparequired
            // [['fotohighlight', ], 'required'],
            // [['fotohighlight'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'fotohighlight' => 'Fotohighlight',
            'path' => 'Path',
            'namaproduk' => 'Namaproduk',
        ];
    }
}
