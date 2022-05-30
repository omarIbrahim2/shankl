<?php

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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string("name" , 50);
            $table->string("email")->unique();
            $table->string("password");
            $table->string("cv")->nullable();
            $table->string("field");
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string("phone");
            $table->string("facebookLink")->nullable();
            $table->string("googleLink")->nullable();
            $table->string("twitterLink")->nullable();
            $table->string("linkedinLink")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string("image")->nullable();
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
        Schema::dropIfExists('teachers');
    }
};
