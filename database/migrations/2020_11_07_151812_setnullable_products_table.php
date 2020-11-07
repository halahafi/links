<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetnullableProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('u_speed', 50)->nullable();
            $table->string('d_speed', 50)->nullable();
            $table->string('technology', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('u_speed', 50)->nullable();
            $table->dropColumn('d_speed', 50)->nullable();
            $table->dropColumn('technology', 50)->nullable();
        });
    }
}
