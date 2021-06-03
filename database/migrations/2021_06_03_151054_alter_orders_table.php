<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // $table->dropColumn('username');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('email');
            $table->dropColumn('address');
            // $table->dropIfExists('first_name');
            // $table->dropIfExists('last_name');
            // $table->dropIfExists('email');
            // $table->dropIfExists('address');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            // $table->string('username');
            $table->string('first_name')->after('order_no');
            $table->string('last_name')->after('first_name');
            $table->string('email')->after('last_name');
            $table->text('address')->after('email');
    });
    }
}
