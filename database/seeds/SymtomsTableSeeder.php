<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymtomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptoms')->insert([
            'code' => 'G01',
            'symptom' => 'Berkurang rasa terutama ditangan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G02',
            'symptom' => 'Darah didalam urin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G03',
            'symptom' => 'Demam',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G04',
            'symptom' => 'Desakan dalam kencing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G05',
            'symptom' => 'Kejang',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G06',
            'symptom' => 'Kencing dimalam hari',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G07',
            'symptom' => 'Menggigil',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G08',
            'symptom' => 'Mual',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G09',
            'symptom' => 'Mudah Lelah',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G10',
            'symptom' => 'Muntah',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G11',
            'symptom' => 'Nafsu makan menurun',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G12',
            'symptom' => 'Nanah diurin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G13',
            'symptom' => 'Nyeri ditulang pinggul',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G14',
            'symptom' => 'Nyeri didaerah kandung kemih',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G15',
            'symptom' => 'Nyeri didaerah ginjal',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G16',
            'symptom' => 'Nyeri ketika kencingl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G17',
            'symptom' => 'Nyeri perut',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G18',
            'symptom' => 'Nyeri punggung dibagian bawah',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G19',
            'symptom' => 'Nyeri yang hilang timbull',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G20',
            'symptom' => 'Pembengkakan bagian tubuh tertentu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G21',
            'symptom' => 'Pembengkakan yang menyeluruhl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G22',
            'symptom' => 'Penurunan berat badan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G23',
            'symptom' => 'Perubahan mental / suasana hati',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G24',
            'symptom' => 'Rambut dan kuku menjadi rapuh',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G25',
            'symptom' => 'Ruam kulit / kulit kemerahan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G26',
            'symptom' => 'Sering kencing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G27',
            'symptom' => 'Syok atau kaget',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G28',
            'symptom' => 'Tekanan darah tinggi',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G29',
            'symptom' => 'Tremor tangan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G30',
            'symptom' => 'Volume urin berkurang',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
