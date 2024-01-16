<?php
namespace Src\Modules\Identity\Fixture;

class IdentityFixture
{
    public function generate($countItems)
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < $countItems; $i++) {
            $name_id = $faker->numberBetween(1, $countItems);
            $surname_id = $faker->numberBetween(1, $countItems);
            $language_id = $faker->numberBetween(1, 5);
            $age = $faker->numberBetween(18, 65);
            $gender = $faker->numberBetween(0, 1);
            $email = $faker->unique()->safeEmail;
        }
    }
}
