<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact() {
        return '<iframe src="https://www.educastudio.com/contact-us" width="100%" height="100%"></iframe>';
    }
}
