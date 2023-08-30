<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $types=[
            'LongTerm','ShortTerm','Expensive','Cheap'
        ];

        foreach ($types as $type){
            $newType = new Type;
            $newType->name = $type;
            $newType->slug = $faker->slug();
            $newType->save();
        }
    }
}
