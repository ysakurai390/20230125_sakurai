<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'test',
        ];
        Todo::create($param);
        $param = [
            'content' => 'controller'
        ];
        Todo::create($param);
        $param = [
            'content' => 'test2'
        ];
    }
}
