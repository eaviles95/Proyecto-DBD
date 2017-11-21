<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class CommuneTableSeeder extends Seeder
{
    protected $total = 50;
    $arr = ['buin','paine'];
    public function getModel()
    {
        return new App\Commune();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name'=>$faker->name,
            'province_id' => $this->random('Province')->id,
            'ubication' => arr[0];
        ];
    }

}