<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up()
{
    Schema::create('profissionals', function (Blueprint $table) {
        $table->id();
        $table-> string('email',120)->Unique()->nullable(false);
        $table-> string('cpf',11 )->Unique()->nullable(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profissionals');
    }
};
