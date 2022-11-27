<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $ID
 * @property string $fotoblog
 * @property string $path
 * @property string|null $dateblog
 * @property string|null $judulblog
 * @property string|null $textblog
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            
            // [['fotoblog', 'path'], 'required'],
            [[ 'path', 'dateblog', 'judulblog', 'textblog'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'fotoblog' => 'Fotoblog',
            'path' => 'Path',
            'dateblog' => 'Dateblog',
            'judulblog' => 'Judulblog',
            'textblog' => 'Textblog',
        ];
    }
}
