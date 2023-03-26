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
        //
        if(Schema::hasTable('user_accounts')){

            return;

        }

        Schema::create('user_accounts', function (Blueprint $table) {

            $table->id();
            $table->String('fname');
            $table->String('lname');
            $table->integer('Contact_Number')->nullable();
            $table->String('address');
            $table->String('email')->unique();
            $table->String('password');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
