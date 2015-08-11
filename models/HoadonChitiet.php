<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon_chitiet".
 *
 * @property integer $id
 * @property integer $id_hd
 * @property integer $id_sanpham
 * @property integer $soluong
 * @property integer $status
 *
 * @property Hoadon $idHd
 * @property Sanpham $idSanpham
 */
class HoadonChitiet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon_chitiet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_hd', 'id_sanpham', 'soluong'], 'required'],
            [['id_hd', 'id_sanpham', 'soluong', 'status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_hd' => 'Id Hd',
            'id_sanpham' => 'Id Sanpham',
            'soluong' => 'Soluong',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHd()
    {
        return $this->hasOne(Hoadon::className(), ['id' => 'id_hd']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSanpham()
    {
        return $this->hasOne(Sanpham::className(), ['id' => 'id_sanpham']);
    }
}
