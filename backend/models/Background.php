<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "background".
 *
 * @property int $ID

 * @property string|null $textutama
 * @property string|null $tomboltext
 */
class Background extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'background';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['fotodepan', 'path'], 'required'],
            [[ 'textutama', 'tomboltext', ], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            
            'textutama' => 'Textutama',
            'tomboltext' => 'Tomboltext',
            
        ];
    }
}
