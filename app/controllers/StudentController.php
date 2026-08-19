<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = '3F4';

        $student = [
            'student_id' => 'MCC2024-00201',
            'name'       => 'JINKY ACAN MACANDILI',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F4',
            'email'      => 'jinkymaandili05@gmail.com',

            'address'    => 'Calapan City, Oriental Mindoro',
            'contact'    => '09277349712',
            'skills'     => 'Web Development, Programming, and Problem Solving',
            'hobbies'    => 'Listening to Music, Watching Movies, and Playing Games',
            'description'=> 'I am a 3rd year BS Information Technology student who is interested in technology, programming, and web development.',
            'facebook'   => 'https://facebook.com/',
            'github'     => 'https://github.com/'
        ];

        $this->call->view('student/StudentHome', $student);
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00201',
            'name'       => 'JINKY ACAN MACANDILI',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F4',
            'email'      => 'jinkymaandili05@gmail.com',

            'address'    => 'Calapan City, Oriental Mindoro',
            'contact'    => '09277349825',
            'skills'     => 'Web Development, Programming, and Problem Solving',
            'hobbies'    => 'Listening to Music, Watching Movies, and Playing Games',
            'description'=> 'I am a 3rd year BS Information Technology student who is interested in technology, programming, and web development.',
            'facebook'   => 'https://facebook.com/',
            'github'     => 'https://github.com/'
        ];

        $this->call->view('student/StudentProfile', $student);
    }
}