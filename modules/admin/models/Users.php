<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 09.03.18
 * Time: 12:46
 */

namespace app\modules\admin\models;

use yii\web\IdentityInterface;
use yii\db\ActiveRecord;

class Users extends ActiveRecord implements IdentityInterface {

    public static function tableName()
    {
        return 'user';
    }
    // Переопределяем методы для интерфейса
    public static function findIdentity($id)
    {
//        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
        $identity = static::findOne(['id' => $id]);
        $identity->id = $identity->getAttribute('id');
        return $identity;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();

    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
}