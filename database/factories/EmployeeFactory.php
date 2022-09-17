<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Language;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker2 = Language::create('ja_JP');
        $faker3 = Language::create('el_GR');

        return [
            'nip' => $this->faker->ssn,
            'nama' => $faker2->kanaName,
            'tmplahir' => $faker2->city,
            'tgllahir' => $this->faker->unique()->dateTimeBetween($startDate = '-78 years', $endDate = '-27 years', $timezone = null, $time = null),
            'kota' => $faker3->prefecture
        ];
    }
}
