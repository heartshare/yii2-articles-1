<?php

use hzhihua\dump\Migration;

/**
 * Class m180210_093422_2_key_article_status
 * @property \yii\db\Transaction $_transaction
 * @Author Hzhihua <cnzhihua@gmail.com>
 */
class m180210_093422_2_key_article_status extends Migration
{

	/**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->addPrimaryKey(null, '{{%article_status}}', 'id');
        $this->addAutoIncrement('{{%article_status}}', 'id', 'smallint');

    }

	/**
     * @inheritdoc
     */
    public function safeDown()
    {
        
        foreach ($this->runSuccess as $keyName => $value) {
            if ('PRIMARY' === $keyName) {
                $this->dropPrimaryKey(null, '{{%article_status}}');
            } else {
                $this->dropIndex($keyName, '{{%article_status}}');
            }
        }

    }
}