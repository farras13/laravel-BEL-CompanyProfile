<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTraceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_trace', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained('package');
            $table->string('status', 150);
            $table->timestamp('date')->nullable();
            $table->timestamp('time')->nullable();
            $table->text('description');
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
        Schema::dropIfExists('package_trace');
    }
}
