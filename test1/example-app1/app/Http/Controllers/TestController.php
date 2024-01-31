<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showTest(Request $request) {
        return 'Hello World';
    }

    public function showViewTest(Request $request) {
        return ('testhello');
    }
}
