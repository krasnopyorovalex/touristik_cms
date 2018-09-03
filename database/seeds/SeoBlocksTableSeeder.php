<?php

use Illuminate\Database\Seeder;

class SeoBlocksTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SeoBlock::class)->create();
    }
}