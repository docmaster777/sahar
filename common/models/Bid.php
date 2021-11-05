<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bid".
 *
 * @property int $id
 * @property int|null $master_id
 * @property string|null $date_time
 * @property int|null $customer_id
 * @property int|null $price
 * @property int|null $status
 * @property string|null $comment
 */
class Bid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['master_id', 'customer_id', 'price', 'status'], 'integer'],
            [['date_time'], 'safe'],
            [['comment'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'master_id' => 'Master ID',
            'date_time' => 'Date Time',
            'customer_id' => 'Customer ID',
            'price' => 'Price',
            'status' => 'Status',
            'comment' => 'Comment',
        ];
    }
}
