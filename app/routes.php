<?php
Flight::route('/new/@myname/surname/@raval', ['UserController', 'getUserId']);
Flight::route('/about', function () {
    echo 'About us Page';
});
