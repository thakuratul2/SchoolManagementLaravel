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
        Schema::create('table_class_subject', function (Blueprint $table) {
            $table->integer('csid');
            $table->integer('class_id')->nullable();
            $table->integer('subject_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->tinyInteger('is_delete')->default(0);
            $table->tinyInteger('status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_class_subject');
    }
};
