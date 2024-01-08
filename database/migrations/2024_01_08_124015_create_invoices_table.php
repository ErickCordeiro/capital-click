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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->foreignId('wallet_id')->constrained('wallets');
            $table->foreignId('category_id')->constrained('categories');
            $table->integer('invoice_of')->nullable();
            $table->string('description');
            $table->string('type');
            $table->decimal('value', 10, 2);
            $table->string('currency')->default('BRL');
            $table->date('due_at');
            $table->string('repeat_when');
            $table->string('period')->default('month');
            $table->integer('enrollments')->nullable();
            $table->integer('enrollments_of')->nullable();
            $table->string('status')->default('unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
