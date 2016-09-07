<?php
use App\Classes\myTest;
use App\Classes\User;
echo myTest::test();
Flight::route('/test5', ['myTest', 'test']);

//Flight::route('/love', ['otherTest', 'loveMe']);
//Flight::route('/user', ['User', 'getMyUser']);
//Flight::start();
