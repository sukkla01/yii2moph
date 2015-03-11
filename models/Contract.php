<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contract".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $email
 */
class Contract extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contract';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'email'],'required'],
            [['address'], 'string'],
            [['firstname', 'lastname', 'email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'ชื่อ',
            'lastname' => 'นามสกุล',
            'address' => 'ที่อยู่',
            'email' => 'Email',
        ];
    }
}
