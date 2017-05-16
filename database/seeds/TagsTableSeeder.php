<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tags')->insert([
            'name' => '人世间',
            'description' => '诉人世间冷暖',
            'thumbnail' => '/assets/admin/images/tag_default.png'
        ]);

        DB::table('tags')->insert([
            'name' => '技术',
            'thumbnail' => '/assets/admin/images/tag_default.png'
        ]);

        DB::table('tags')->insert([
            'name' => '杂文',
            'thumbnail' => '/assets/admin/images/tag_default.png'
        ]);

    }
}
