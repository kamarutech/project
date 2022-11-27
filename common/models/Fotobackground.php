<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "galeri".
 *
 * @property int $ID
 * @property string $fotodepan
 * @property string $path
 */
class FotoBackground extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fotobackground';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['foto',], 'required'],
            // [['foto', 'path'], 'string', 'max' => 255],
                        [['foto'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg,jpeg'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'fotodepan' => 'Fotodepan',
            'path' => 'Path',
        ];
    }
}
