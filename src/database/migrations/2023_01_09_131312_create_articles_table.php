<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        !Schema::hasTable('categories')
            && Schema::create('categories', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('name', 100);
                $table->timestamps();
            });

        !Schema::hasTable("articles")
            && Schema::create('articles', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('name', 100);
                $table->foreignUuid('category_id');
                $table->text("description");
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
        Schema::dropIfExists('categories');
    }
};