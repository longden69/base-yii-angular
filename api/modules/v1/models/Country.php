<?php
namespace api\modules\v1\models;

use \yii\db\ActiveRecord;
/**
 * Country Model
 */

class Country extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey() {
        return ['code'];
    }

    /**
     * @return array
     */
    public function rules() {
        return [
            [
                [
                    'code',
                    'name',
                    'population'
                ],
                'required'
            ]
        ];
    }
}
