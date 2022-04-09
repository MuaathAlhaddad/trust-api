<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxonomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table( 'taxonomies' )->delete();
        $taxonomies = array(
            array( 'type' => 'shape', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'brand', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'model', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'type', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'engine_model', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'year', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
            array( 'type' => 'tag', 'parent_id' => null, 'published_at' => now(), 'lang' => 'en' ),
        );
        DB::table( 'taxonomies' )->insert( $taxonomies );
    }
}
