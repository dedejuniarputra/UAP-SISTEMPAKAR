<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('rules')->insert([
            'disease_id' => '7', // P07
            'symptom_id' => '1', // G01
            'probability' => 0.85,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '7', // P07
            'symptom_id' => '19', // G19
            'probability' => 0.85,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '3', // P03
            'symptom_id' => '3', // G03
            'probability' => 0.90,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '3', // P03
            'symptom_id' => '7', // G07
            'probability' => 0.90,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '3', // P03
            'symptom_id' => '15', // G15
            'probability' => 0.90,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '10', // P10
            'symptom_id' => '6', // G06
            'probability' => 0.80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '10', // P10
            'symptom_id' => '4', // G04
            'probability' => 0.80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '10', // P10
            'symptom_id' => '16', // G16
            'probability' => 0.80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '11', // P11
            'symptom_id' => '13', // G13
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '11', // P11
            'symptom_id' => '15', // G15
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '11', // P11
            'symptom_id' => '18', // G18
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '8', // P08
            'symptom_id' => '2', // G02
            'probability' => 0.70,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '8', // P08
            'symptom_id' => '12', // G12
            'probability' => 0.70,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '2', // P02
            'symptom_id' => '22', // G22
            'probability' => 0.80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '2', // P02
            'symptom_id' => '11', // G11
            'probability' => 0.80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '1', // P01
            'symptom_id' => '5', // G05
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '1', // P01
            'symptom_id' => '23', // G23
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '9', // P09
            'symptom_id' => '26', // G26
            'probability' => 0.85,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '9', // P09
            'symptom_id' => '16', // G16
            'probability' => 0.85,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '4', // P04
            'symptom_id' => '30', // G30
            'probability' => 0.65,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '4', // P04
            'symptom_id' => '9', // G09
            'probability' => 0.65,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '5', // P05
            'symptom_id' => '17', // G17
            'probability' => 0.70,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '5', // P05
            'symptom_id' => '28', // G28
            'probability' => 0.70,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '1', // P01
            'symptom_id' => '20', // G20
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '1', // P01
            'symptom_id' => '21', // G21
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '1', // P01
            'symptom_id' => '24', // G24
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '1', // P01
            'symptom_id' => '25', // G25
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '2', // P02
            'symptom_id' => '8', // G08
            'probability' => 0.80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '2', // P02
            'symptom_id' => '10', // G10
            'probability' => 0.80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '2', // P02
            'symptom_id' => '22', // G22
            'probability' => 0.80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '6', // P06
            'symptom_id' => '14', // G14
            'probability' => 0.65,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('rules')->insert([
            'disease_id' => '6', // P06
            'symptom_id' => '16', // G16
            'probability' => 0.65,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
    }
}
