<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class titlesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        public function generateRandomcity()
        {
          $city=array
          (
            '臺北市',
            '新北市',
            '基隆市',
            '臺中市',
            '臺南市',
            '高雄市',
            '桃園市',
            '新竹市',
            '新竹縣',
            '苗栗縣',
            '彰化縣',
            '南投縣',
            '雲林縣',
            '嘉義市',
            '嘉義縣',
            '屏東縣',
            '宜蘭縣',
            '花蓮縣',
            '臺東縣',
            '澎湖縣',
            '金門縣',
            '連江縣'
          ) ;
          return $city[rand(0,count($city)-1)];

        }
        DB::table('titles')->insert([
            'name'=>'潘敬翔',
            'gender'=>'男',
            'session'=>87,
            'title'=>'煉銅術士',
            'city'=>'桃園市',
            'birthday'=>"民國69年6月9日",
            'area'=>'龍岡',
            'cellphone'=>'09xxxxxxxxxx',
            'address'=>'龍岡街',
            'website'=>'https://www.youtube.com/watch?v=EWMDA7JOEPQ',
            'tid'=>1
        ]);
    }
}
