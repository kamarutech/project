<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $ID
 * @property string $Foto
 * @property string $path
 * @property string|null $since
 * @property string|null $judultext
 * @property string|null $text
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['Foto', 'path'], 'required'],
            [[ 'since', 'judultext', 'text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
           
            'since' => 'Since',
            'judultext' => 'Judultext',
            'text' => 'Text',
        ];
    }
}
