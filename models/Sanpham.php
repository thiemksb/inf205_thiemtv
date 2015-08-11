<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $id
 * @property integer $id_loai
 * @property string $ten
 * @property integer $status
 *
 * @property HoadonChitiet[] $hoadonChitiets
 * @property Loaisanpham $idLoai
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_loai', 'ten'], 'required'],
            [['id_loai', 'status'], 'integer'],
            [['ten'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_loai' => 'Id Loai',
            'ten' => 'Ten',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadonChitiets()
    {
        return $this->hasMany(HoadonChitiet::className(), ['id_sanpham' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLoai()
    {
        return $this->hasOne(Loaisanpham::className(), ['id' => 'id_loai']);
    }
}
