<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('sure_name');
            $table->string('middle_name');
            $table->string('birth_date');
            $table->string('type');
            $table->string('duration');
            $table->string('entry_time');
            $table->string('period');
            $table->string('app_status');
            $table->string('status_date');
            $table->string('ref_number');
            $table->string('country');
            $table->string('district');
            $table->string('number');
            $table->string('issu_date');
            $table->string('exp_date');
            $table->string('img_url');


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
