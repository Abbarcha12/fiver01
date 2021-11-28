<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Botble\Ecommerce\Enums\CustomerStatusEnum;

class AddStatusColumnToEcCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ec_customers', function (Blueprint $table) {
            $table->string('status', 60)->default(CustomerStatusEnum::ACTIVATED);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ec_customers', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
