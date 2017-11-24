<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
            /*if (Schema::hasColumn('users_id') == false) {
              $table->integer('users_id')->unsigned();
              $table->integer('categories_id')->unsigned();
            }*/
            $table->foreign('user_id')->references('idUser')->on('users');
            $table->foreign('category_id')->references('idCategory')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
            $table->dropColumn('users_id');
            $table->dropColumn('categories_id');

        });
    }
}
