<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Produk".
 *
 * @property int $ID
 * @property string $fotoproduk
 * @property string $path
 * @property string|null $jenisproduk
 * @property string|null $namaproduk
 * @property string|null $hargaproduk
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['fotoproduk', 'path'], 'required'],
            [[ 'path', 'jenisproduk', 'namaproduk', 'hargaproduk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'fotoproduk' => 'Fotoproduk',
            'path' => 'Path',
            'jenisproduk' => 'Jenisproduk',
            'namaproduk' => 'Namaproduk',
            'hargaproduk' => 'Hargaproduk',
        ];
    }
}
