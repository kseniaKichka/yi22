<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 07.05.18
 * Time: 16:10
 */
namespace app\widgets\resentPosts;

use yii\base\Widget;
use \yii\helpers\Html;

class RecentPosts extends Widget {

    public $message;

    public function init() {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run() {
        return Html::encode($this->message);
    }
}