<?php

use App\Models\Qualification;
use Illuminate\Database\Seeder;

class QualificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qualifications = [

            'Associate Degree' , 'Bachelor Degree' ,
            ' Certificate' , ' Diploma'
        ];

        foreach ($qualifications as $qualification)
        {

            Qualification::Create(

                [
                    'name' => $qualification ,
                    'user_id' => 1
                ]

            );
        }
    }
}
