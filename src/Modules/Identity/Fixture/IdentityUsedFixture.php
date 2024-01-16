<?php
namespace Src\Modules\Identity\Fixture;

class IdentityUsedFixture
{
    public function generate($countItems)
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < $countItems; $i++) {
            $user_id = $faker->numberBetween(1, $countItems);
            $identity_id = $faker->numberBetween(1, $countItems);
            $created_at = $faker->dateTimeThisDecade->format('Y-m-d H:i:s');
       }
    }
}