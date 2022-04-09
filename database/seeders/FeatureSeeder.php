<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'features' )->delete();
        $ads = array(
            array( 'sort' => 1, 'featureable_id' => 1, 'featureable_type' => 'ad', 'type' => 'homepage', 'feature_from' => "2022-03-01", 'feature_to' => now(), 'created_at' => now() ),
            array( 'sort' => 2, 'featureable_id' => 2, 'featureable_type' => 'ad', 'type' => 'homepage', 'feature_from' => "2022-03-01", 'feature_to' => now(), 'created_at' => now() ),
            array( 'sort' => 3, 'featureable_id' => 3, 'featureable_type' => 'ad', 'type' => 'homepage', 'feature_from' => "2022-03-01", 'feature_to' => now(), 'created_at' => now() ),
            array( 'sort' => 4, 'featureable_id' => 4, 'featureable_type' => 'ad', 'type' => 'homepage', 'feature_from' => "2022-03-01", 'feature_to' => now(), 'created_at' => now() ),
            array( 'sort' => 5, 'featureable_id' => 5, 'featureable_type' => 'ad', 'type' => 'homepage', 'feature_from' => "2022-03-01", 'feature_to' => now(), 'created_at' => now() ),
            array( 'sort' => 6, 'featureable_id' => 6, 'featureable_type' => 'ad', 'type' => 'homepage', 'feature_from' => "2022-03-01", 'feature_to' => now(), 'created_at' => now() ),
            array( 'sort' => 7, 'featureable_id' => 7, 'featureable_type' => 'ad', 'type' => 'homepage', 'feature_from' => "2022-03-01", 'feature_to' => now(), 'created_at' => now() ),
            array( 'sort' => 8, 'featureable_id' => 8, 'featureable_type' => 'ad', 'type' => 'homepage', 'feature_from' => "2022-03-01", 'feature_to' => now(), 'created_at' => now() ),
            array( 'sort' => 9, 'featureable_id' => 9, 'featureable_type' => 'ad', 'type' => 'homepage', 'feature_from' => "2022-03-01", 'feature_to' => now(), 'created_at' => now() ),
        );
        DB::table( 'features' )->insert( $ads );
    }
}
