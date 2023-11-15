<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class partiesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parties')->insert([
          'tname'=>'民主進步黨',
          'chairman'=>'賴清德',
          'secretary'=>'許立明',
          'standpoint'=>'泛綠',
          'link'=>'https://www.dpp.org.tw/'


        ]);
    }
}
