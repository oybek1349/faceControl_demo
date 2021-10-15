<?php

namespace app\modules\control_university\models;

use Yii;

/**
 * This is the model class for table "{{%xodimlar}}".
 *
 * @property int $id
 * @property string|null $xodimID
 * @property string $ismi
 * @property string|null $tabel_nomer
 * @property int|null $bolimlar_id
 * @property int|null $lavozimlar_id
 * @property int|null $ish_jadvallari_id
 * @property string|null $cardNo
 * @property string|null $uy_manzil
 * @property string|null $tel_raqam
 * @property string|null $rasm
 *
 * @property Bolimlar $bolimlar
 * @property IshJadvallari $ishJadvallari
 * @property Lavozimlar $lavozimlar
 */
class Xodimlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%xodimlar}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ismi'], 'required'],
            [['bolimlar_id', 'lavozimlar_id', 'ish_jadvallari_id'], 'integer'],
            [['rasm'], 'string'],
            [['xodimID'], 'string', 'max' => 50],
            [['ismi', 'cardNo', 'uy_manzil'], 'string', 'max' => 64],
            [['tabel_nomer'], 'string', 'max' => 16],
            [['tel_raqam'], 'string', 'max' => 20],
            [['bolimlar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bolimlar::className(), 'targetAttribute' => ['bolimlar_id' => 'id']],
            [['ish_jadvallari_id'], 'exist', 'skipOnError' => true, 'targetClass' => IshJadvallari::className(), 'targetAttribute' => ['ish_jadvallari_id' => 'id']],
            [['lavozimlar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lavozimlar::className(), 'targetAttribute' => ['lavozimlar_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'xodimID' => 'Xodim ID',
            'ismi' => 'Ismi',
            'tabel_nomer' => 'Tabel Nomer',
            'bolimlar_id' => 'Bolimlar ID',
            'lavozimlar_id' => 'Lavozimlar ID',
            'ish_jadvallari_id' => 'Ish Jadvallari ID',
            'cardNo' => 'Karta Nomer',
            'uy_manzil' => 'Uy Manzil',
            'tel_raqam' => 'Tel Raqam',
            'rasm' => 'Rasm',
        ];
    }

    /**
     * Gets query for [[Bolimlar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBolimlar()
    {
        return $this->hasOne(Bolimlar::className(), ['id' => 'bolimlar_id']);
    }

    /**
     * Gets query for [[IshJadvallari]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIshJadvallari()
    {
        return $this->hasOne(IshJadvallari::className(), ['id' => 'ish_jadvallari_id']);
    }

    /**
     * Gets query for [[Lavozimlar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLavozimlar()
    {
        return $this->hasOne(Lavozimlar::className(), ['id' => 'lavozimlar_id']);
    }
}
