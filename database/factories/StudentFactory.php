<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Language;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $locales = ['de_AT', 'nl_NL', 'de_DE', 'de_CH', 'it_CH', 'fr_CH', 'nl_BE', 'fr_BE'];

        $faker = Language::create(Arr::random($locales));

        return [
            'nis' => fake()->ssn,
            'nama' => mb_strtoupper($faker->name),
            'tmplahir' => $faker->city,
            'tgllahir' => fake()->unique()->dateTimeBetween($startDate = '-19 years', $endDate = '-17 years', $timezone = null, $time = null),
            'kota' => $faker->city,
        ];
    }
}
