<?php

namespace app\modules\control_university\models;

use Yii;

/**
 * This is the model class for table "{{%ish_jadvallari}}".
 *
 * @property int $id
 * @property string $ish_boshlanish_vaqti
 * @property string $ish_tugash_vaqti
 * @property string|null $ish_grafigi
 * @property string|null $tarif
 * @property string|null $qoshimcha
 *
 * @property Xodimlar[] $xodimlars
 */
class IshJadvallari extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ish_jadvallari}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ish_boshlanish_vaqti', 'ish_tugash_vaqti'], 'required'],
            [['ish_boshlanish_vaqti', 'ish_tugash_vaqti'], 'safe'],
            [['ish_grafigi', 'tarif', 'qoshimcha'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ish_boshlanish_vaqti' => 'Ish Boshlanish Vaqti',
            'ish_tugash_vaqti' => 'Ish Tugash Vaqti',
            'ish_grafigi' => 'Ish Grafigi',
            'tarif' => 'Tarif',
            'qoshimcha' => 'Qoshimcha',
        ];
    }

    /**
     * Gets query for [[Xodimlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getXodimlars()
    {
        return $this->hasMany(Xodimlar::className(), ['ish_jadvallari_id' => 'id']);
    }
}
