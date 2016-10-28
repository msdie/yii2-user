<?php

namespace msdie\user;
use yii\base\Model;

/**
 * This is just an example.
 */
class Module extends Model
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'msdie\user\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
