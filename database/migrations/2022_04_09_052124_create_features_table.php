<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'features', function ( Blueprint $table ) {
            $table->id();
            $table->integer( 'sort' );
            $table->integer( 'featureable_id' );
            $table->string( 'featureable_type' );
            $table->enum( 'type', [ 'homepage', 'top', 'highlight', 'campaign' ] );
            $table->dateTime( 'feature_from' )->nullable();
            $table->dateTime( 'feature_to' )->nullable();
            $table->timestamps();
            $table->index( [ 'featureable_id', 'featureable_type', 'type' ] );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'features' );
    }
}
