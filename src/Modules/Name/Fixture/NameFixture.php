<?php
namespace Src\Modules\Name\Fixture;

class NameFixture
{
    public function generate($countItems)
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < $countItems; $i++) {
            $language_id = $faker->numberBetween(1, 5);
            $value = $faker->firstName;
            $gender = $faker->numberBetween(0, 1);
        }
    }
}
