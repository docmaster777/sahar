<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bid_service".
 *
 * @property int $id
 * @property int|null $service_id
 * @property int|null $bid_id
 */
class BidService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bid_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'bid_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_id' => 'Service ID',
            'bid_id' => 'Bid ID',
        ];
    }
}
