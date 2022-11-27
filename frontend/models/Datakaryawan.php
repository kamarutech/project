<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datakaryawan".
 *
 * @property int $idkaryawan
 * @property string $nama
 * @property string $alamat
 * @property string $no_telpon
 */
class Datakaryawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datakaryawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'no_telpon'], 'required'],
            [['nama', 'alamat', 'no_telpon'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idkaryawan' => 'Idkaryawan',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_telpon' => 'No Telpon',
        ];
    }
}
