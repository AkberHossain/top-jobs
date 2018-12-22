<?php

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [

            '0-1 years' ,
            '1-2 years' ,
            '2-5 years' ,
            '5-10 years' ,
            'more than 10 years'
        ];

        foreach ($experiences as $experience)
        {
            Experience::Create(

                [
                    'name' => $experience ,
                    'user_id' => 1
                ]

            );
        }
    }
}
