<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $technologies = Technology::all();
        foreach(config('projects') as $objProject) {

            // Project::create($objProject);
            $project = Project::create([
                'type_id' => $objProject['type_id'],
                'title' => $objProject['title'],
                'author' => $objProject['author'],
                'creation_date' => $objProject['creation_date'],
                'last_update' => $objProject['last_update'],
                'collaborators' => $objProject['collaborators'],
                'description' => $objProject['description'],
                'link_github' => $objProject['link_github'],

            ]);
            $project->technologies()->sync($objProject['technologies']);

        }
    }
}
