<?php

namespace ozgursulum\review\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property int|null $critic_id
 * @property string|null $body
 * @property string|null $name
 *
 * @property Critic $critic
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['critic_id'], 'integer'],
            [['body'], 'string', 'max' => 450],
            [['name'], 'string', 'max' => 255],
            [['critic_id'], 'exist', 'skipOnError' => true, 'targetClass' => Critic::className(), 'targetAttribute' => ['critic_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'critic_id' => 'Critic ID',
            'body' => 'Body',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Critic]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCritic()
    {
        return $this->hasOne(Critic::className(), ['id' => 'critic_id']);
    }
}
