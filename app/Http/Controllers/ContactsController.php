<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $page = 'contacts';

        $list = [
            'John Doe',
            'Jane Doe',
            'John Smith',
            'Jane Smith'
        ];



        return view('index',
            [
                'page' => $page,
                'list' => $list
            ]
        );
    }
}
