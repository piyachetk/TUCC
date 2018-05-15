<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->enum('prefix', ['นาย', 'นางสาว', 'นาง', 'เด็กชาย', 'เด็กหญิง']);
            $table->string('firstName');
            $table->string('lastName');
            $table->enum('level', ['ม.4', 'ม.5', 'ม.6']);
            $table->unsignedInteger('class');
            $table->unsignedInteger('number');
            $table->enum('status', ['OLD', 'FAILED', 'PASSED', 'CONFIRMED']);

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
        Schema::dropIfExists('members');
    }
}
