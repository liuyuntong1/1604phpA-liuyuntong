<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $time
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['time'], 'safe'],
            [['title', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'time' => 'Time',
        ];
    }
}
