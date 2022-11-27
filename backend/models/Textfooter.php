<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "textfooter".
 *
 * @property int $ID
 * @property string|null $textfooterbawah
 */
class Textfooter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'textfooter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['textfooterbawah'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'textfooterbawah' => 'Textfooterbawah',
        ];
    }
}
