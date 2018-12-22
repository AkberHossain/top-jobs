<?php

use App\Models\Job_Category;
use Illuminate\Database\Seeder;

class JobCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [

        'Information Technology' ,
        'Marketing' ,
        'Finance' ,
        'Graphic designer' ,
        'Web Developer'
    ];

        foreach ($categories as $category)
        {
            Job_Category::Create(

                [
                    'slug' => str_slug($category) ,
                    'name' => $category ,
                    'user_id' => 1
                ]

            );
        }
    }
}
