<?php

namespace app\modules\control_university\models;

use Yii;

/**
 * This is the model class for table "{{%lavozimlar}}".
 *
 * @property int $id
 * @property string|null $nomlanishi
 * @property string|null $tarif
 *
 * @property Xodimlar[] $xodimlars
 */
class Lavozimlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%lavozimlar}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomlanishi', 'tarif'], 'string', 'max' => 64],
            [['nomlanishi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomlanishi' => 'Nomlanishi',
            'tarif' => 'Tarif',
        ];
    }

    /**
     * Gets query for [[Xodimlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getXodimlars()
    {
        return $this->hasMany(Xodimlar::className(), ['lavozimlar_id' => 'id']);
    }
}
