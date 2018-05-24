<?php

namespace tests\codeception\_pages;

use yii\codeception\BasePage;

class ContactPage extends BasePage
{
    public $route = 'site/contact';

    public function submit(array $contactData)
    {
        foreach ($contactData as $field => $value) {
            $inputType = $field === 'body' ? 'textarea' : 'input';
            $this->actor->fillField($inputType . '[name="ContactForm[' . $field . ']"]', $value);
        }
        $this->actor->click('contact-button');
    }
}