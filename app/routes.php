<?php
Flight::route('/', function () {
    echo 'This is my simple PHP App';
});
Flight::route('/new/@myname/surname/@raval', ['UserController', 'getUserId']);
Flight::route('/about', function () {
    echo 'About us Page';
});
