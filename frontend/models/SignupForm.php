<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use common\models\User;
use common\models\Students;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $Student_surname;
    public $email;
    public $password;
    public $created_at;
    public $updated_at;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            [['username','email','Student_surname','password'], 'required','message' => 'Заповніть поле'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Цей студентський вже існує.'],
            ['username', 'integer'],
            [['created_at', 'updated_at'],'safe'],
            ['Student_surname', 'string'],
            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Ця пошта вже існує.'],
            ['password', 'string', 'min' => 5],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */

    public function signup()
    {
 
        if (!$this->validate()) {
            return null;
        }
 
        $user = new User();
        $studone = Students::find()->select(['Student_id', 'Student_surname'])->all();
        $login = $this->username;
        $surname = $this->Student_surname;
        foreach ($studone as $k) {
            if (($k->Student_id == $login) && ($k->Student_surname == $surname)) {
                $user->username = $login; 
                $user->Student_surname = $surname; 
            } 
        } //если в базе студентов студенческий и фамилия совпадают, то зарегестрировать

        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->created_at = $this->created_at;
        $user->updated_at = $this->updated_at;
        if (($user->username == $login) && ($user->Student_surname == $surname))
        {
            return $user->save() ? $user : null;
        } 

        Yii::$app->session->setFlash('error','Виникла помилка при реєстрації! Перевiрте будь ласка номер «Номер студентського» або «Прізвище»');
    }
        
    public function attributeLabels()
    {
        return [
            'username' => 'Логiн',
            'Student_surname' => 'Прізвище',
            'email' => 'Пошта',
            'password' => 'Пароль',
        ];
    }

    
}
