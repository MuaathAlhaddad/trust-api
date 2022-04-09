<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'cities' )->delete();

        $states = array(
            array( 'name' => 'صنعاء', 'country_id' => 243 ),
            array( 'name' => 'عدن', 'country_id' => 243 ),
            array( 'name' => 'حضرموت', 'country_id' => 243 ),
            array( 'name' => 'تعز', 'country_id' => 243 ),
            array( 'name' => 'الحديدة', 'country_id' => 243 ),
            array( 'name' => 'إب', 'country_id' => 243 ),
            array( 'name' => 'أبين', 'country_id' => 243 ),
            array( 'name' => 'البيضاء', 'country_id' => 243 ),
            array( 'name' => 'لحج', 'country_id' => 243 ),
            array( 'name' => 'مأرب', 'country_id' => 243 ),
            array( 'name' => 'شبوة', 'country_id' => 243 ),
            array( 'name' => 'الجوف', 'country_id' => 243 ),
            array( 'name' => 'المهرة', 'country_id' => 243 ),
            array( 'name' => 'المحويت', 'country_id' => 243 ),
            array( 'name' => 'صعدة', 'country_id' => 243 ),
            array( 'name' => 'حجة', 'country_id' => 243 ),
            array( 'name' => 'الضالع', 'country_id' => 243 ),
            array( 'name' => 'عمران', 'country_id' => 243 ),
            array( 'name' => 'ذمار', 'country_id' => 243 ),
            array( 'name' => 'ريمة', 'country_id' => 243 ),
        );

        DB::table( 'cities' )->insert( $states );
    }
}
