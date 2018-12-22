<?php

use App\Models\Salary;
use Illuminate\Database\Seeder;

class SalariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salary_ranges = [

            '5000 - 10000' ,
            '10000 - 15000' ,
            '15000 - 20000' ,
            '20000 - 30000' ,
            '30000 - 50000' ,
            '50000 - 75000' ,
            '75000 - 100000'
        ];

        foreach ($salary_ranges as $salary_range)
        {
            Salary::Create(

                [
                    'currency_id' => 1 ,
                    'salary_range' => $salary_range ,
                    'user_id' => 1
                ]

            );
        }
    }
}
