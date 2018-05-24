<?php

namespace tests\codeception\_pages;

use yii\codeception\BasePage;

class LoginPage extends BasePage
{
    public $route = 'site/login';

    public function login($username, $password)
    {
        $this->actor->fillField('input[name="LoginForm[username]"]', $username);
        $this->actor->fillField('input[name="LoginForm[password]"]', $password);
        $this->actor->click('login-button');
    }
}