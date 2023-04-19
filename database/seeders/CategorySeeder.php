<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use illiminate\Database\Console\Seeds\WithoutModelEvents;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'Html Css JavaScript Php MySql']);
        Category::create(['name'=>'JavaScript Laravel MySql']);
        Category::create(['name'=>'Vue.js Laravel MySql']);
        Category::create(['name'=>'JavaScript Pyhton MySql']);
        Category::create(['name'=>'Vue.js Django MySql']);
        Category::create(['name'=>'JavaScript Node.js MySql']);
        Category::create(['name'=>'Vue.js .NET MySql']);
        Category::create(['name'=>'Bootstrap Laravel MySql']);


    }
}
