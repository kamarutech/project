<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kontak".
 *
 * @property int $ID
 * @property string|null $nomotelpon
 * @property string|null $email
 * @property string|null $alamat
 * @property string|null $instagram
 * @property string|null $twitter
 * @property string|null $facebook
 */
class Kontak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kontak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomotelpon', 'email', 'alamat', 'instagram', 'twitter', 'facebook'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'nomotelpon' => 'Nomotelpon',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'instagram' => 'Instagram',
            'twitter' => 'Twitter',
            'facebook' => 'Facebook',
        ];
    }
}
