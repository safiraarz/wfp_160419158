<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'SUPPLIER 1',
            ],
            [
                'name' => 'SUPPLIER 2',
            ],
            [
                'name' => 'SUPPLIER 3',
            ],
            [
                'name' => 'SUPPLIER 4',
            ],
            [
                'name' => 'SUPPLIER 5',
            ],
        ]);
    }
}
