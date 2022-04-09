<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'attributes' )->delete();
        $attributes = array(
            array( 'color' => 'red', 'negotiable' => 1, 'warranty' => 1, 'condition' => 'new', 'status' => 'published', 'boost' => 'four-wheel', 'gear' => 'auto', 'country_import' => 'gulf', 'fuel_type' => 'petrol', 'kilometer' => 10342, 'engine_power' => 22434, 'verified_at' => now(), 'ad_id' => 1 ),
            array( 'color' => 'orange', 'negotiable' => 1, 'warranty' => 1, 'condition' => 'new', 'status' => 'published', 'boost' => 'four-wheel', 'gear' => 'manual', 'country_import' => 'usa', 'fuel_type' => 'petrol', 'kilometer' => 6342, 'engine_power' => 61475, 'verified_at' => now(), 'ad_id' => 2 ),
            array( 'color' => 'blue', 'negotiable' => 0, 'warranty' => 1, 'condition' => 'new', 'status' => 'published', 'boost' => 'four-wheel', 'gear' => 'auto', 'country_import' => 'gulf', 'fuel_type' => 'diesel', 'kilometer' => 4342, 'engine_power' => 31435, 'verified_at' => now(), 'ad_id' => 2 ),
            array( 'color' => 'gray', 'negotiable' => 1, 'warranty' => 0, 'condition' => 'used', 'status' => 'sold', 'boost' => 'front-wheel', 'gear' => 'auto', 'country_import' => 'gulf', 'fuel_type' => 'petrol', 'kilometer' => 1342, 'engine_power' => 11435, 'verified_at' => now(), 'ad_id' => 3 ),
            array( 'color' => 'black', 'negotiable' => 1, 'warranty' => 0, 'condition' => 'used', 'status' => 'sold', 'boost' => 'four-wheel', 'gear' => 'auto', 'country_import' => 'gulf', 'fuel_type' => 'diesel', 'kilometer' => 3342, 'engine_power' => 1435, 'verified_at' => now(), 'ad_id' => 4 ),
            array( 'color' => 'white', 'negotiable' => 1, 'warranty' => 1, 'condition' => 'used', 'status' => 'published', 'boost' => 'rear-wheel', 'gear' => 'manual', 'country_import' => 'usa', 'fuel_type' => 'petrol', 'kilometer' => 200342, 'engine_power' => 435, 'verified_at' => now(), 'ad_id' => 5 ),
            array( 'color' => 'gold', 'negotiable' => 0, 'warranty' => 1, 'condition' => 'new', 'status' => 'published', 'boost' => 'four-wheel', 'gear' => 'auto', 'country_import' => 'others', 'fuel_type' => 'petrol', 'kilometer' => 20342, 'engine_power' => 22435, 'verified_at' => now(), 'ad_id' => 6 ),
        );
        DB::table( 'attributes' )->insert( $attributes );
    }
}
