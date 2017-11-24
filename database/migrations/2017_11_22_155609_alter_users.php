<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->renameColumn('id','idUser');
            $table->renameColumn('name','firstnameUser');
            $table->string('lastnameUser')->after('firstnameUser');
            $table->renameColumn('password','passwordUser');
            $table->renameColumn('mail','mailUser');
            $table->tinyInteger('statusUser')->after('passwordUser');
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
            //
            $table->renameColumn('idUsers','id');
            $table->renameColumn('firstnameUser','name');
            $table->dropColumn('lastnameUser');
            $table->dropColumn('statusUser');
        });
    }
}
