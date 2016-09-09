<?php
Flight::route('/about', ['Controller', 'template']);
Flight::route('/', function () {
    echo 'This is my simple PHP App';
});
Flight::route('/new/@myname/surname/@raval', ['UserController', 'getUserId']);
