<?php

namespace Database\Seeders;

use App\Models\Taxonomy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Taxonomy_contentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'taxonomy_contents' )->delete();

        /*********************************
         *            brands
         ********************************/
        // brands
        $brands_id = DB::table( 'taxonomies' )->where( 'type', Taxonomy::TYPE_BRAND )->pluck( 'id' )->first();

        $taxonomy_contents = array(
            array( 'title' => 'toyota', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'ford', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'chevrolet', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'hyundai', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'mercedes', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'honda', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'bmw', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'dodge', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'gms', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'chrysler', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'pocket', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'mitsubishi', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'mazda', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'land rover', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'isuzu', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'cadillac', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'porsche', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'audi', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'suzuki', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'infinity', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'hummer', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'lincoln', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'volks', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'wagon', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'daihatsu', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'jelly', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'mercury', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'volvo', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'peugeot', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'bentley', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'jaguar', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'subaru', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'changan', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'buick', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'maserati', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => ' rolls-royce', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'lamborghini', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'opel', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'skoda', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'ferrari', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'citroen', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'cherry', 'description' => "car brand", 'taxonomy_id' => $brands_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
        );

        DB::table( 'taxonomy_contents' )->insert( $taxonomy_contents );

        /*********************************
         *            Models
         ********************************/
        $toyota_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'toyota' )->pluck( 'id' )->first();

        // brands > models
        // toyota
        $model_id = DB::table( 'taxonomies' )->where( 'type', Taxonomy::TYPE_MODEL )->pluck( 'id' )->first();

        $taxonomy_contents = array(
            array( 'title' => '4Runner', 'description' => "car model", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'land cruiser', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'camry', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'avalon', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'hilux', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'corolla', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'ns', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'prado', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'orion', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'sequoia', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'bus', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'rav', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'innova', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'rav', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'eco', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'toyota 86', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'prius', 'description' => "car type", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
            array( 'title' => 'Yaris', 'description' => "car model", 'taxonomy_id' => $model_id, 'published_at' => now(), 'parent_id' => $toyota_id, 'lang' => 'en' ),
        );

        DB::table( 'taxonomy_contents' )->insert( $taxonomy_contents );

        /*********************************
         *            Years
         ********************************/
        $yaris_id = DB::table( 'taxonomy_contents' )->where( 'title', '=', 'Yaris' )->pluck( 'id' )->first();

        // brands > models > year
        // toyota > yaris
        $year_id = DB::table( 'taxonomies' )->where( 'type', Taxonomy::TYPE_YEAR )->pluck( 'id' )->first();

        $taxonomy_contents = array(
            array( 'title' => '1999', 'description' => "car year", 'taxonomy_id' => $year_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en' ),
            array( 'title' => '2003', 'description' => "car year", 'taxonomy_id' => $year_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en' ),
            array( 'title' => '2005', 'description' => "car year", 'taxonomy_id' => $year_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en' ),
            array( 'title' => '2009', 'description' => "car year", 'taxonomy_id' => $year_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en' ),
            array( 'title' => '2011', 'description' => "car year", 'taxonomy_id' => $year_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en' ),
            array( 'title' => '2014', 'description' => "car year", 'taxonomy_id' => $year_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en' ),
            array( 'title' => '2017', 'description' => "car year", 'taxonomy_id' => $year_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en' ),
            array( 'title' => '2020', 'description' => "car year", 'taxonomy_id' => $year_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en' ),
        );

        DB::table( 'taxonomy_contents' )->insert( $taxonomy_contents );

        /*********************************
         *            Shapes
         ********************************/
        $shape_id = DB::table( 'taxonomies' )->where( 'type', Taxonomy::TYPE_SHAPE )->pluck( 'id' )->first();

        $taxonomy_contents = array(
            array( 'title' => 'SUV', 'description' => " car body", 'taxonomy_id' => $shape_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en', 'icon' => 'fa fa-car' ),
            array( 'title' => 'convertible', 'description' => " car body", 'taxonomy_id' => $shape_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en', 'icon' => 'fa fa-car' ),
            array( 'title' => 'coupe', 'description' => " car body", 'taxonomy_id' => $shape_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en', 'icon' => 'fa fa-car' ),
            array( 'title' => 'hatchback', 'description' => " car body", 'taxonomy_id' => $shape_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en', 'icon' => 'fa fa-car' ),
            array( 'title' => 'sedan', 'description' => " car body", 'taxonomy_id' => $shape_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en', 'icon' => 'fa fa-car' ),
            array( 'title' => 'Pick - up', 'description' => " car body", 'taxonomy_id' => $shape_id, 'published_at' => now(), 'parent_id' => $yaris_id, 'lang' => 'en', 'icon' => 'fa fa-car' ),
        );

        DB::table( 'taxonomy_contents' )->insert( $taxonomy_contents );

        /*********************************
         *            Tags
         ********************************/
        $tags_id = DB::table( 'taxonomies' )->where( 'type', Taxonomy::TYPE_TAG )->pluck( 'id' )->first();

        $taxonomy_contents = array(
            array( 'title' => 'high demand', 'description' => "high demand ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'most visited', 'description' => "most visited ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'popular', 'description' => "popular ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'cheap', 'description' => "cheap ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
            array( 'title' => 'latest', 'description' => "latest ads", 'taxonomy_id' => $tags_id, 'published_at' => now(), 'parent_id' => null, 'lang' => 'en' ),
        );

        DB::table( 'taxonomy_contents' )->insert( $taxonomy_contents );
    }
}
