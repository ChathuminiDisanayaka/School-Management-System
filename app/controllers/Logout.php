<?php

/**
 * Class logout
 */
Class Logout extends Controller
{
    function index()
    {
        Auth::logout();
        $this->redirect('login');

    }
}


