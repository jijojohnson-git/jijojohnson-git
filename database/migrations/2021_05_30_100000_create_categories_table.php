<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $datas =  array(
            [
                'name' => 'Salads',
            ],
            [
                'name' => 'Specials',
            ],
            [
                'name' => 'Starters',
            ],
            [
                'name' => 'Combo',
            ],
            [
                'name' => 'Dosa Express',
            ],
            [
                'name' => 'Curries',
            ],
            [
                'name' => 'Rice & Breads',
            ],
            [
                'name' => 'Biriyani',
            ],
            [
                'name' => 'Pizza',
            ],
            [
                'name' => 'Sides',
            ]
        );

        foreach($datas as $data)
        {
            $category = new Category(); //The Category is the model for your migration
            $category->name = $data['name'];
            $category->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
