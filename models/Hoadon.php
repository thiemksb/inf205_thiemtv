<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property integer $id
 * @property integer $id_kh
 * @property string $ngaymua
 * @property integer $status
 *
 * @property Khachhang $idKh
 * @property HoadonChitiet[] $hoadonChitiets
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kh', 'ngaymua'], 'required'],
            [['id_kh', 'status'], 'integer'],
            [['ngaymua'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kh' => 'Id Kh',
            'ngaymua' => 'Ngaymua',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKh()
    {
        return $this->hasOne(Khachhang::className(), ['id' => 'id_kh']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadonChitiets()
    {
        return $this->hasMany(HoadonChitiet::className(), ['id_hd' => 'id']);
    }
}
