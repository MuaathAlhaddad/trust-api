<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdTaxonomyContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'ad_taxonomy_content' )->delete();

        $toyota_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'toyota' )->pluck( 'id' )->first();

        $yaris_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'Yaris' )->pluck( 'id' )->first();

        $land_cruiser_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'land cruiser' )->pluck( 'id' )->first();

        $camry_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'camry' )->pluck( 'id' )->first();

        $avalon_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'avalon' )->pluck( 'id' )->first();

        $hilux_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'hilux' )->pluck( 'id' )->first();

        $corolla_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'corolla' )->pluck( 'id' )->first();

        $year_2020_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', '2020' )->pluck( 'id' )->first();

        $sedan_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'sedan' )->pluck( 'id' )->first();

        $ad_taxonomy_content = array(

            array( 'ad_id' => 1, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 1, 'taxonomy_content_id' => $land_cruiser_id, 'created_at' => now() ),  // land cruiser
            array( 'ad_id' => 1, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 1, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 2, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 2, 'taxonomy_content_id' => $camry_id, 'created_at' => now() ),  // camry
            array( 'ad_id' => 2, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 2, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 3, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 3, 'taxonomy_content_id' => $avalon_id, 'created_at' => now() ),  // avalon
            array( 'ad_id' => 3, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 3, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 4, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 4, 'taxonomy_content_id' => $hilux_id, 'created_at' => now() ),  // hilux
            array( 'ad_id' => 4, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 4, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 5, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 5, 'taxonomy_content_id' => $corolla_id, 'created_at' => now() ),  // corolla
            array( 'ad_id' => 5, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 5, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 6, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 6, 'taxonomy_content_id' => $corolla_id, 'created_at' => now() ),  // corolla
            array( 'ad_id' => 6, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 6, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 7, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 7, 'taxonomy_content_id' => $corolla_id, 'created_at' => now() ),  // corolla
            array( 'ad_id' => 7, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 7, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 8, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 8, 'taxonomy_content_id' => $corolla_id, 'created_at' => now() ),  // corolla
            array( 'ad_id' => 8, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 8, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 9, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 9, 'taxonomy_content_id' => $corolla_id, 'created_at' => now() ),  // corolla
            array( 'ad_id' => 9, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 9, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 10, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 10, 'taxonomy_content_id' => $corolla_id, 'created_at' => now() ),  // corolla
            array( 'ad_id' => 10, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 10, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020

            array( 'ad_id' => 11, 'taxonomy_content_id' => $toyota_id, 'created_at' => now() ),    // toyota
            array( 'ad_id' => 11, 'taxonomy_content_id' => $corolla_id, 'created_at' => now() ),  // corolla
            array( 'ad_id' => 11, 'taxonomy_content_id' => $sedan_id, 'created_at' => now() ),  // sedan
            array( 'ad_id' => 11, 'taxonomy_content_id' => $year_2020_id, 'created_at' => now() ),  // 2020
        );

        DB::table( 'ad_taxonomy_content' )->insert( $ad_taxonomy_content );
    }
}
