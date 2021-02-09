<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0)->comment('用户id');
            $table->text('breakfast')->nullable()->comment('早餐');
            $table->text('lunch')->nullable()->comment('午餐');
            $table->text('dinner')->nullable()->comment('晚餐');
            $table->unsignedDecimal('weight')->default(0.00)->comment('体重');
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
        Schema::dropIfExists('recipes');
    }
}
