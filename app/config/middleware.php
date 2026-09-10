<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once APP_DIR . 'middlewares/AuthMiddleware.php';
require_once APP_DIR . 'middlewares/StudentMiddleware.php';

$config['middlewares'] = [
    'auth' => new AuthMiddleware(),
    'student' => new StudentMiddleware(),
];
