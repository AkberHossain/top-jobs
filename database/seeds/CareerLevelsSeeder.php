<?php

use App\Models\Career_Level;
use Illuminate\Database\Seeder;

class CareerLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [

            'Assistant Manager' ,
            'Junior' ,
            'Manager' ,
            'Senior' ,
            'Department Head' ,
            'Executive'
        ];

        foreach ($levels as $level)
        {
            Career_Level::Create(

                [
                    'name' => $level ,
                    'user_id' => 1
                ]

            );
        }
    }
}
