<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();

            $table->string('status'); //Pending,Chequed-out, Abandoned
            $table->string('coupon')->nullable();

            $table->bigInteger('total')->default(0);
            $table->bigInteger('discount')->default(0);

            $table->foreignId('user_id')->index()->nullable()->constrained()->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
