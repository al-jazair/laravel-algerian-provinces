<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(config('algerian-provinces.table_name') ?? 'wilayas', function (Blueprint $table) {
            $table->id();

            $table->string(config('algerian-provinces.columns_names.wilaya_fr_name') ?? 'fr_name');
            $table->string(config('algerian-provinces.columns_names.wilaya_ar_name') ?? 'ar_name');

            $table->unique(config('algerian-provinces.columns_names.wilaya_fr_name') ?? 'fr_name');
            $table->unique(config('algerian-provinces.columns_names.wilaya_ar_name') ?? 'ar_name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wilayas');
    }
};
