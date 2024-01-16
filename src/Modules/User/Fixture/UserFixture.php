<?php
namespace Src\Modules\User\Fixture;

class UserFixture
{
    public function generate($countItems)
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < $countItems; $i++) {
            $email = $faker->unique()->safeEmail;
            $password = $faker->password;
            $tariff_id = $faker->randomNumber(2);
            $tariff_date_end = $faker->dateTimeBetween('now', '+3 months')->format('Y-m-d H:i:s');
            $token = bin2hex(random_bytes(16));
            $created_at = $faker->dateTime()->format('Y-m-d H:i:s');
            $updated_at = $faker->dateTime()->format('Y-m-d H:i:s');
        }
    }
}
