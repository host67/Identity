<?php
namespace Src\Modules\Tariff\Fixture;

class TariffFixture
{
    public function generate($countItems)
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < $countItems; $i++) {
            $name = $faker->word;
            $count_requests_day = $faker->numberBetween(1, 1096);
            $price = $faker->numberBetween(100, 500);
        }
    }
}
