<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMilitaryInPersonalInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_infos', function (Blueprint $table) {
            $table->string('marital')->nullable()->after('Age')->change();
            $table->string('military')->nullable()->after('Age')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_infos', function (Blueprint $table) {
            $table->string('marital')->nullable()->change();
            $table->string('military')->nullable()->change();
        });
    }
}
