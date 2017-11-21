<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('tipos')->insert([
            'name' => "lider em treinamento"
        ]);
        DB::table('tipos')->insert([
            'name' => "frequentador assiduo"
        ]);
        DB::table('tipos')->insert([
            'name' => "lider"
        ]);
        DB::table('tipos')->insert([
            'name' => "supervisor"
        ]);
        DB::table('tipos')->insert([
            'name' => "pastor"
        ]);

    }
}
