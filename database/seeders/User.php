<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index = 1; $index <= 10; $index++) {
            DB::table('users')->insert([
                'id'            => $index,
                'username'      => 'default_' . $index,
                'first_name'    => 'default',
                'last_name'     => 'default',
                'email'         => Str::random() . '@default.com',
                'password'      => password_hash('default', PASSWORD_DEFAULT),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        }
    }
}
