<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 09.03.18
 * Time: 10:59
 */

namespace app\modules\admin\models;

use app\modules\admin\models\Users;
use Yii;
use yii\base\Model;
use app\modules\admin\models;

class AdminLogin extends Model {

    public $email;
    public $password;
    public $rememberMe;
    public $user = false;

    public function rules() {

        return [
            ['email', 'required', 'message' => 'Please enter a email.'],
            ['password', 'required', 'message' => 'Please enter a password.'],
        ];
    }
    
    public function login() {

        if ($this->validate()) {
//            var_dump(\Yii::$app->user->login($this->getUser())); die;

                return \Yii::$app->user->login($this->getUser());
        }
        return false;
    }

    public function getUser() {
        if ($this->user === false) {
            $this->user = Users::findOne(['email' => $this->email, 'password' => $this->password]);
        }

        return $this->user;
    }

}