<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Kyle Miranda',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Anna Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Mark Reyes',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'John Garcia',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Liza Mendoza',
                'role' => 'Staff'
            ]
        ];

        return view('users/index', ['users' => $users]);
    }
}