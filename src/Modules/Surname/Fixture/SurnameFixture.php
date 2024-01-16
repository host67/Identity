<?php
namespace Src\Modules\Surname\Fixture;

class SurnameFixture
{
    public function generate($countItems)
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < $countItems; $i++) {
            $language_id = $faker->numberBetween(1, 5); // 5 языков
            $value = $faker->lastName;
            $gender = $faker->numberBetween(0, 1);
        }
    }
}
