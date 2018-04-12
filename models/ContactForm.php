<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $fullname;
    public $email;
    public $message;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['fullname', 'email', 'message'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'email' => \Yii::t('app', 'Your Email'),
            'fullname' => \Yii::t('app', 'Your Fullname'),
            'message' => \Yii::t('app', 'Your message'),
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->fullname])
                ->setSubject('Contact Page')
                ->setTextBody($this->message)
                ->send();

            return true;
        }
        return false;
    }
}
