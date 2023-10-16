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
        Schema::create('dealer_credits', function (Blueprint $table) {
            
            $table->id();
            
            $table->foreignId('dealer_id')
                ->references('id')
                ->on('dealers')
                ->cascadeOnDelete();

            $table->foreignId('bank_id')
                ->references('id')
                ->on('banks')
                ->nullOnDelete();   

            $table->string('dealer_employee');
            $table->decimal('credit_amount', 12, 2);
            $table->dateTime('credit_term')->nullable();
            $table->decimal('interest_rate')->nullable();
            $table->text('reason_description')->nullable();
            $table->tinyInteger('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealer_credits');
    }
};
