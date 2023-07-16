<?php

use Illuminate\Database\Seeder;
use App\Models\Spending;

class SpendingSeeder extends Seeder
{
    public function run()
    {
        
        $spendings = [
            ['congressperson_id' => 1, 'value' => 1000, 'month' => 1],
            ['congressperson_id' => 2, 'value' => 1500, 'month' => 1],
            ['congressperson_id' => 1, 'value' => 1200, 'month' => 2],
            
        ];

        foreach ($spendings as $spending) {
            Spending::create($spending);
        }
    }
}
