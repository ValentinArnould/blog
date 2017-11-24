<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagsHasArticlesConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags_has_articles', function (Blueprint $table) {
            //
            $table->foreign('tags_idTag')->references('idTag')->on('tags');
            $table->foreign('articles_idArticle')->references('idArticle')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tags_has_articles', function (Blueprint $table) {
            //
            $table->dropForeign('tags_has_articles_tags_idTag_foreign');
            $table->dropForeign('tags_has_articles_articles_idArticle_foreign');
        });
    }
}
