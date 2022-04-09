<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'attributes', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'color' )->nullable();
            $table->boolean( 'negotiable' )->default( false );
            $table->boolean( 'warranty' )->default( false );
            $table->enum( 'condition', [ 'new', 'used' ] );
            $table->enum( 'status', [ 'draft', 'pending', 'unpublished', 'published', 'sold' ] );
            $table->enum( 'boost', [ 'four-wheel', 'front-wheel', 'rear-wheel' ] );
            $table->enum( 'gear', [ 'auto', 'manual' ] );
            $table->enum( 'country_import', [ 'gulf', 'usa', 'others' ] );
            $table->enum( 'fuel_type', [ 'petrol', 'diesel' ] );
            $table->double( 'kilometer' )->nullable();
            $table->float( 'engine_power' )->nullable();
            $table->date( 'verified_at' )->nullable();
            $table->foreignId( 'ad_id' )->constrained( 'ads' );
            $table->softDeletes();
            $table->timestamps();
            $table->index( [ 'negotiable', 'condition' ] );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'attributes' );
    }
}
