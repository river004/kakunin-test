<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->randomNumber,
            'first_name' => '山田',
            'last_name' => '太郎',
            'gender' => '男性',
            'email' => 'test@example.com',
            'tell' => '08012345678',
            'adders' => '東京千駄ヶ谷区1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'detail' => 'お問い合わせ',
        ];
    }
}
