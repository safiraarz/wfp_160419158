<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'ANALGESIK NARKOTIK',
                'desc' => ''
            ],
            [
                'name' => 'ANALGESIK NON NARKOTIK',
                'desc' => ''
            ],
            [
                'name' => 'ANTIPIRAI',
                'desc' => ''
            ],
            [
                'name' => 'NYERI NEUROPATIK',
                'desc' => ''
            ],
            [
                'name' => 'ANESTETIK LOKAL',
                'desc' => ''
            ],
            [
                'name' => 'ANESTETIK UMUM dan OKSIGEN',
                'desc' => ''
            ],
            [
                'name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
                'desc' => ''
            ],
            [
                'name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
                'desc' => ''
            ],
            [
                'name' => 'ANTIDOT dan OBAT LAIN untuk KERACUNAN (KHUSUS)',
                'desc' => ''
            ],
            [
                'name' => 'ANTIEPILEPSI - ANTIKONVULSI',
                'desc' => ''
            ],
        ]);
    }
}
