<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TitlesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public static function generateRandomName()
     {
         
         $lastNames = ['王', '李', '張', '劉', '陳', '楊', '趙', '黃', '周', '吳', '鄭', '蔡', '馮', '蕭', '曹', '程', '曾', '彭', '潘', '葉'];
 
        
         $start = 0x4E00; 
         $end = 0x9FFF;   
         
         $randomChineseName = '';
         for ($i = 0; $i < 3; $i++) {
             $unicode = mt_rand($start, $end);
             $randomChineseName .= mb_chr($unicode, 'UTF-8');
         }
 
         $randomLastName = $lastNames[array_rand($lastNames)];
 
         $fullName = $randomLastName . $randomChineseName;
 
         return $fullName;
     }
     public static function generateRandomGender()
     {
      $gender=['男','女','不公開'];
      return $gender[rand(0,count($gender)-1)];
     }
      public function generateRandomCity()
      {
        $city=['臺北市','新北市','基隆市',
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
        '連江縣'];
        return $city[rand(0,count($city)-1)];
      }
      public function generateRandomBirthday()
      {
        $start = Carbon::now()->subYears(60); // 開始日期，假設最大年齡是 60 歲
        $end = Carbon::now()->subYears(18);   // 結束日期，假設最小年齡是 18 歲

        $randomBirthday = Carbon::create(
        rand($start->year, $end->year),
        rand(1, 12),
        rand(1, 28) // 最簡單的方式，每月都假設最多 28 天
        );
      return $randomBirthday->format('Y-m-d');
      }
      public function generateRandomArea(){
        $area=['東區','西區','北區','南區'];
        return $area[rand(0,count($area)-1)];
      }
      public function generateRandomCellphone(){
        $prefixes = ['09', '08', '07'];

        $randomPrefix = $prefixes[array_rand($prefixes)];
        $randomSuffix = sprintf('%08d', mt_rand(0, 99999999));

        return $randomPrefix . $randomSuffix;
      }

      public function generateRandomAddress(){
        $streets = ['街', '路', '巷']; // 街道類型
        $cities = ['臺北市', '新北市', '桃園市', '臺中市', '臺南市', '高雄市']; // 一些城市

        $randomCity = $cities[array_rand($cities)];
        $randomStreetType = $streets[array_rand($streets)];
        $randomStreetName = '第' . rand(1, 100) . $randomStreetType; // 隨機生成街道號碼

        return $randomCity . $randomStreetName;
      }
           

      public function generateRandomWebsite(){
        $protocols = ['http://', 'https://'];
        $domains = ['example.com', 'example.org', 'example.net', 'example.info'];

        $randomProtocol = $protocols[array_rand($protocols)];
        $randomDomain = $domains[array_rand($domains)];

        return $randomProtocol . $randomDomain;

      }


      public function run()
      {
        $tidRange=range(1,30);
        shuffle($tidRange);
        for ($i=0; $i<30;$i++){ 
          $name = $this->generateRandomName();
          $gender=$this->generateRandomGender();
          $session = rand(1, 100);
          $city=$this->generateRandomCity();
          $birthday=$this->generateRandomBirthday();
          $area=$this->generateRandomArea();
          $cellphone = $this->generateRandomCellphone();
          $address = $this->generateRandomAddress();
          $website = $this->generateRandomWebsite();
          $tid = $tidRange[$i];
          
        DB::table('titles')->insert([
          'name'=>$name,
          'gender'=>$gender,
          'session'=>$session,
          'title'=>'議員',
          'city'=>$city,
          'birthday'=>$birthday,
          'area'=>$area,
          'cellphone'=>$cellphone,
          'address'=>$address,
          'website'=>$website,
          'tid'=>$tid
      ]);
    }
   }
}