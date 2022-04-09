<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'ads', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'sku' )->unique();
            $table->string( 'title' );
            $table->longText( 'description' )->nullable();
            $table->text( 'location' )->nullable();
            $table->double( 'price', 20, 2 );
            $table->dateTime( 'published_at' );
            $table->foreignId( 'user_id' )->constrained( 'users' );
            $table->softDeletes();
            $table->timestamps();
            $table->index( [ 'user_id', 'sku' ] );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'ads' );
    }
}
