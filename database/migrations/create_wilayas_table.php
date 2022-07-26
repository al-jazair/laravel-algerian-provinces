<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('wilayas', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->unique('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wilayas');
    }
};
