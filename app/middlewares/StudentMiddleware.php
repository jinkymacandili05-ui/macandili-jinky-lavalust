<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle($next)
    {
        if (!isset($_SESSION['profile_access'])) {
            redirect('student');
            return;
        }

        if ($_SESSION['profile_access'] !== true) {
            redirect('student');
            return;
        }

        unset($_SESSION['profile_access']);

        return $next();
    }
}