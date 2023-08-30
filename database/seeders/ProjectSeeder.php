<?php

namespace Database\Seeders;
use App\Models\Type;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $types = Type::all();

        for ($i=0; $i<70; $i++){
            $newProject = new Project();
            $newProject->type_id= ($faker->randomElement($types))->id;
            $newProject->name =ucfirst($faker->unique()->words(5, true));
            $newProject->goal =ucfirst($faker->paragraph());
            $newProject->link =$faker->url();
            $newProject->image = $faker->imageUrl(360, 360, 'animals', true, 'cats');
            $newProject->save();
        }
    }
}
