<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $ID
 * @property string $foto
 * @property string $namaproduk
 * @property string $deskripsiproduk
 * @property int $harga
 * @property string $path
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
            // [[ 'namaproduk', 'deskripsiproduk', 'harga', ], 'required'],
            // [['harga'], 'integer'],
            [[ 'namaproduk', 'Jenisproduk	', 'Jenisproduk	','path'.'hargaproduk'], 'string', 'max' => 255],
            
            // [['foto'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'foto' => 'Foto',
            'namaproduk' => 'Namaproduk',
            'deskripsiproduk' => 'Deskripsiproduk',
            'harga' => 'Harga',
            'path' => 'Path',
        ];
    }
}
