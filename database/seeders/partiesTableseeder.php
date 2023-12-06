<?php 

 
 

namespace Database\Seeders; 

use Illuminate\Support\Facades\DB; 

use Illuminate\Database\Seeder; 

use Illuminate\Support\Carbon; 

 
 

class PartiesTableseeder extends Seeder 

{ 

    /** 

     * Run the database seeds. 

     * 

     * @return void 

     */ 

    public function run() 

    { 
        
        for ($i=0; $i<30;$i++){ 

            $tname = $this->generateRandomtname(); 

            $chairman = $this->generateRandomchairman(); 

            $secretary = $this->generateRandomsecretary(); 

            $standpoint = $this->generateRandomstandpoint(); 

            $link = $this->generateRandomlink(); 

            $random_datetime = Carbon::now()->subMinutes(rand(1,55)); 
            
            

 
 

            DB::table('parties')->insert([ 

                'tname'=>$tname, 

                'chairman'=>$chairman, 

                'secretary'=>$secretary, 

                'standpoint'=>$standpoint, 

                'link'=>$link, 

                'created_at' =>$random_datetime, 

                'updated_at' =>$random_datetime 

       

     

            ]); 

 
 

        } 

    } 

    public function generateRandomString($length = 10){ 

        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 

        $charactersLength = strlen($characters); 

        $randomString = ''; 

        for ($i = 0; $i < $length; $i++){ 

            $randomString .= $characters[rand(0, $charactersLength - 1)]; 

        } 

        return $randomString; 

    } 

 
 
 

    public function generateRandomtname(){ 

        $tnames = [ 

            '民主進步黨', 

            '中國國民黨', 

            '台灣民眾黨', 

            '新黨', 

            '時代力量', 

            '親民黨', 

            '台灣團結聯盟', 

            '台灣基進', 

            '台灣綠黨', 

            '社會民主黨', 

            '正神名黨', 

            '勞動黨', 

            '無黨團結聯盟', 

            '無黨籍' 

        ]; 

        return $tnames[rand(0, count($tnames) - 1)];   

    } 

     

    public function generateRandomchairman(){ 

        $chairmans = ['賴清德', 

        '朱立倫', 

        '柯文哲', 

        '吳成典', 

        '王琬諭', 

        '宋楚瑜', 

        '劉一德', 

        '王興煥', 

        '余筱菁', 

        '呂鴻志', 

        '許榮德', 

        '吳榮元', 

        '林炳坤', 

        '無']; 

        return $chairmans[rand(0, count($chairmans) - 1)]; 

    } 

    public function generateRandomsecretary(){ 

        $secretarys = ['許立明', 

        '黃健庭', 

        '周台竹', 

        '潘懷宗', 

        '李兆立', 

        '馬傑明', 

        '周倪安', 

        '無', 

        '王彥涵', 

        '伍雅婷', 

        '無', 

        '唐曙', 

        '陳傑儒', 

        '無']; 

        return $secretarys[rand(0,count($secretarys)-1)]; 

    } 

    public function generateRandomstandpoint(){ 

        $standpoints = ['泛綠', 

        '泛藍', 

        '其他', 

        '泛藍', 

        '泛綠', 

        '泛藍', 

        '泛綠', 

        '泛綠', 

        '泛綠', 

        '泛綠', 

        '其他', 

        '泛藍', 

        '泛藍', 

        '無']; 

        return $standpoints[rand(0,count($standpoints)-1)];   

    } 

    public function generateRandomlink(){ 

        $links = ['https://www.dpp.org.tw/', 

        'http://www.kmt.org.tw/?m=1/', 

        'https://www.tpp.org.tw/', 

        'http://www.np.org.tw/', 

        'https://www.newpowerparty.tw/', 

        'https://www.pfp.org.tw/tw/home/', 

        'http://www.tsu.org.tw/', 

        'https://www.statebuilding.tw/', 

        'https://web.greenparty.org.tw/', 

        'https://www.sdparty.tw/', 

        'https://www.facebook.com/people/%E6%AD%A3%E7%A5%9E%E5%90%8D%E9%BB%A8/100069228729091/', 

        'https://www.facebook.com/p/%E5%8B%9E%E5%8B%95%E9%BB%A8-100068809854746/', 

        'https://www.facebook.com/npsunion/?locale=zh_TW', 

        '無']; 

        return $links[rand(0,count($links)-1)]; 

    } 

     

} 

 