<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index = 1; $index <= 10; $index++) {
            DB::table('tasks')->insert([
                'id'            => $index,
                'user_id'       => rand(1, 5),
                'task'          => Str::random(10),
                'description'   => Str::random(25),
                'status'        => 1,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        }
    }
}
