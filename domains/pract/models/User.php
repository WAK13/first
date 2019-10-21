<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function setPassword($password)
    {
        $this->password = sha1($password);
    }

}