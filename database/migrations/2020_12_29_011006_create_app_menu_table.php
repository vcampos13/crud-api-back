<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('color',255);
            $table->string('icon',255);
            $table->string('title',255);
            $table->string('destination',255)->nullable();
            $table->foreignId('app_menus_id')->nullable()->references('id')->on('app_menus');
            $table->timestamps();


        });

        // Insert some stuff
        DB::table('app_menus')->insert(
            array(
                'color' => 'light-blue darken-1',
                'icon' => 'mdi-help',
                'title' => 'Menu 1',
            )
        );

        DB::table('app_menus')->insert(
            array(
                'color' => 'light-blue darken-1',
                'icon' => 'mdi-help',
                'title' => 'Menu 1-1',
                'app_menus_id' => 1,
            )
        );

        DB::table('app_menus')->insert(
            array(
                'color' => 'light-blue darken-1',
                'icon' => 'mdi-help',
                'title' => 'Menu 1-2',
                'app_menus_id' => 1,
            )
        );

        DB::table('app_menus')->insert(
            array(
                'color' => 'light-blue darken-1',
                'icon' => 'mdi-help',
                'title' => 'Menu 2',
            )
        );

        DB::table('app_menus')->insert(
            array(
                'color' => 'light-blue darken-1',
                'icon' => 'mdi-help',
                'title' => 'Menu 2-1',
                'app_menus_id' => 4,
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_menus');
    }
}
