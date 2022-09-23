<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CeratePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('address', 200);
            $table->string('access', 200);
            $table->string('body', 200);
            $table->integer('price')->nullable();
            $table->string('sales', 200)->nullable();
            $table->string('image', 200)->nullable();
            $table->string('hpurl', 200)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
