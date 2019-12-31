<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('profiles')->insert([
            'user_id'=>1,
            'name' => 'name 1',
            'content' => 'test content 1'
        ]);
        DB::table('profiles')->insert([
            'user_id'=>2,
            'name' => 'name 2',
            'content' => 'test content 2'
        ]);
        
    }
}
