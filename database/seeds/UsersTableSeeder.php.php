<?php

use App\User;
use App\Account;
use App\Loan;
use App\Investment;
use App\RecurringExpense;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Hassan Mostafa',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$tySIrWuYcOjZmQQ6WOERu.wk1JOmOIiQ5TboOs0eijrTA/nJ1DDzG',
                'remember_token' => null,
                'created_at'     => '2019-09-16 07:53:12',
                'updated_at'     => '2019-09-16 07:53:12',
            ],
        ];

        User::insert($users);


    }
}
