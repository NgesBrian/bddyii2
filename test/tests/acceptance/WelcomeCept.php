<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that frontpage works');
$I->amOnPage('http://localhost/bddyii2/web/');
$I->see('Congratulations!');
$I->see('Yii-powered');