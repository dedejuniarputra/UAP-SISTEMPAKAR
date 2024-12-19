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
        // Penyakit {{ P01 }}
        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '1',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '2',
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '3',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '4',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '5',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '6',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '7',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '8',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '9',
            'probability' => 0.75,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '10',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '11',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '12',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '13',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '14',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '15',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '16',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '17',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '18',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '20',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '21',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '23',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '25',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '26',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '27',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '28',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '29',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '1',
            'symptom_id' => '30',
            'probability' => 0.25,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // END::Penyakit {{ P01 }}


        // Penyakit {{ P02 }}
        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '1',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '2',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '3',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '4',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '6',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '7',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '8',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '9',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '10',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '11',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '12',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '13',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '14',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '15',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '16',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '17',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '18',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '20',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '21',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '22',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '25',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '26',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '28',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '2',
            'symptom_id' => '30',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // END::Penyakit {{ P02 }}


        // Penyakit {{ P03 }}
        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '1',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '2',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '3',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '4',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '6',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '7',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '8',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '9',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '10',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '11',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '12',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '13',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '14',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '15',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '16',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '17',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '18',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '20',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '21',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '25',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '26',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '28',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '3',
            'symptom_id' => '30',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // END::Penyakit {{ P03 }}


        // Penyakit {{ P04 }}
        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '1',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '2',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '3',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '4',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '6',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '7',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '8',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '9',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '10',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '11',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '12',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '13',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '14',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '15',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '16',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '17',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '18',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '20',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '21',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '24',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '25',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '26',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '28',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '4',
            'symptom_id' => '30',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // END::Penyakit {{ P04 }}


        // Penyakit {{ P05 }}
        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '1',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '2',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '3',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '4',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '6',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '7',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '8',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '9',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '10',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '11',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '12',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '13',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '14',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '15',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '16',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '17',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '18',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '19',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '20',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '21',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '25',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '26',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '28',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '5',
            'symptom_id' => '30',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // END::Penyakit {{ P05 }}


        // Penyakit {{ P06 }}
        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '1',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '2',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '3',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '4',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '6',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '7',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '8',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '9',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '10',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '11',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '12',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '13',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '14',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '15',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '16',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '17',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '18',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '20',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '21',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '25',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '26',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '28',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '6',
            'symptom_id' => '30',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // END::Penyakit {{ P06 }}


        // Penyakit {{ P07 }}
        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '1',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '2',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '3',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '4',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '6',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '7',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '8',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '9',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '10',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '11',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '12',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '13',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '14',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '15',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '16',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '17',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '18',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '20',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '21',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '25',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '26',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '28',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '7',
            'symptom_id' => '30',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // END::Penyakit {{ P07 }}


        // Penyakit {{ P08 }}
        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '1',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '2',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '3',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '4',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '6',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '7',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '8',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '9',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '10',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '11',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '12',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '13',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '14',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '15',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '16',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '17',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '18',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '20',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '21',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '25',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '26',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '28',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '8',
            'symptom_id' => '30',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // END::Penyakit {{ P08 }}


        // Penyakit {{ P09 }}
        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '1',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '2',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '3',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '4',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '6',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '7',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '8',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '9',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '10',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '11',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '12',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '13',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '14',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '15',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '16',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '17',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '18',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '20',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '21',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '25',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '26',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '28',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '9',
            'symptom_id' => '30',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // END::Penyakit {{ P09 }}


        // Penyakit {{ P10 }}
        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '1',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '2',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '3',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '4',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '6',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '7',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '8',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '9',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '10',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '11',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '12',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '13',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '14',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '15',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '16',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '17',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '18',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '20',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '21',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '25',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '26',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '28',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '10',
            'symptom_id' => '30',
            'probability' => 0.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // END::Penyakit {{ P10 }}


        // Penyakit {{ 11 }}
        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '1',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '2',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '3',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '4',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '5',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '6',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '7',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '8',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '9',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '10',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '11',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '12',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '13',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '14',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '15',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '16',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '17',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '18',
            'probability' => 1.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '19',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '20',
            'probability' => 0.33,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '21',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '22',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '23',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '24',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '25',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '26',
            'probability' => 0.67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '27',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '28',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '29',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('rules')->insert([
            'disease_id' => '11',
            'symptom_id' => '30',
            'probability' => 0.00001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
