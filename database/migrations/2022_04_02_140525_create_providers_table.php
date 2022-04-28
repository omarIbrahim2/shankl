<?php

use App\Models\parentt;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->string("area" , 100);
            $table->unsignedInteger("seats");
            $table->string("password");
            $table->string("phone");
            $table->string("type");
            $table->unsignedFloat("installments" , 8 , 2);
            $table->unsignedFloat("seat_price" , 8 , 2);
            $table->string('educational_system');
            $table->string("email")->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }


};
