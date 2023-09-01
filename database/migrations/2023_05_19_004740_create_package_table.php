<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->string('no_resi', 100);
            $table->text('package_desc');
            $table->string('receiver_name', 255);
            $table->string('receiver_address', 255);
            $table->string('sender_name', 255);
            $table->string('sender_address', 255);
            $table->string('weight', 255);
            $table->string('price', 255);
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
        Schema::dropIfExists('package');
    }
}
