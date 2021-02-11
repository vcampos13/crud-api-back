<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Menus\AppMenus;

class EstoquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // Truncate our existing records to start from scratch.
        Estoques::truncate();

        //Create registres
        factory(AppMenus::class, 50)->create();

        // Enable foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
