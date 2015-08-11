<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property integer $id
 * @property string $ten
 * @property string $diachi
 * @property integer $dienthoai
 * @property string $email
 * @property integer $status
 *
 * @property Hoadon[] $hoadons
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten', 'diachi', 'dienthoai', 'email'], 'required'],
            [['dienthoai', 'status'], 'integer'],
            [['ten', 'email'], 'string', 'max' => 50],
            [['diachi'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Ten',
            'diachi' => 'Diachi',
            'dienthoai' => 'Dienthoai',
            'email' => 'Email',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadons()
    {
        return $this->hasMany(Hoadon::className(), ['id_kh' => 'id']);
    }
}
