<?php

namespace app\modules\control_university\models;

use Yii;

/**
 * This is the model class for table "{{%attlog}}".
 *
 * @property string $employeeID
 * @property string $authDateTime
 * @property string $authDate
 * @property string $authTime
 * @property string $direction
 * @property string $divaceName
 * @property string $divaceSN
 * @property string $personName
 * @property string $cardNo
 */
class Qaydnoma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%attlog}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employeeID', 'authDateTime', 'authDate', 'authTime', 'direction', 'divaceName', 'divaceSN', 'personName', 'cardNo'], 'required'],
            [['authDateTime', 'authDate', 'authTime'], 'safe'],
            [['employeeID', 'direction', 'divaceName', 'divaceSN', 'personName'], 'string', 'max' => 50],
            [['cardNo'], 'string', 'max' => 64],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'employeeID' => 'Employee ID',
            'authDateTime' => 'Auth Date Time',
            'authDate' => 'Auth Date',
            'authTime' => 'Auth Time',
            'direction' => 'Direction',
            'divaceName' => 'Divace Name',
            'divaceSN' => 'Divace Sn',
            'personName' => 'Person Name',
            'cardNo' => 'Card No',
        ];
    }
}
