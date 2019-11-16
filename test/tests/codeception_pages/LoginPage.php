<?php

class LoginPage extends BasePage
{
    public $route = 'user/login';
 
    /**
     * @param string $username
     * @param string $password
     */
    public function login($username, $password)
    {
        $this->actor->fillField('input[name="login-form[login]"]', $username);
        $this->actor->fillField('input[name="login-form[password]"]', $password);
        $this->actor->click('button[type=submit]');
    }
}

?>

