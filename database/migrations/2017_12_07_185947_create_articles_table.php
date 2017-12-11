<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('seq', 11)->comment('連番');
            $table->string('title', 64)->nullable()->default(null)->comment('タイトル');
            $table->text('content')->nullable()->comment('本文');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE articles ADD fulltext_column TEXT AS (CONCAT(title, '　', content)) STORED");
        DB::statement("ALTER TABLE articles ADD FULLTEXT(`fulltext_column`) /*!50100 WITH PARSER `ngram` */");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
