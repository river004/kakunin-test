<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            $param = [
                'category_id' => 'その他',
                'first_name' => '山田',
                'last_name' => '太郎',
                'gender' => '男性',
                'email' => 'test@example.com',
                'tell' => '08012345678',
                'adders' => '東京千駄ヶ谷区1-2-3',
                'building' => '千駄ヶ谷マンション101',
                'detail' => 'お問い合わせ',
            ];
            DB::table('contacts')->insert($param);
        }
}
