<?php
Flight::route('/new/@myname/sirname/@raval', ['UserController', 'getUserId']);
Flight::route('/about', function () {
    echo 'About us Page';
});
Flight::start();
