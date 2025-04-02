<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('id_cards', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('id_number')->unique();
            $table->date('dob');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('photo')->nullable();
            $table->string('department');
            // $table->date('issue_date');
            // $table->date('expiry_date');
            $table->timestamps();
            
            // Add indexes for better performance
            $table->index('id_number');
            $table->index('email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('id_cards');
    }
};