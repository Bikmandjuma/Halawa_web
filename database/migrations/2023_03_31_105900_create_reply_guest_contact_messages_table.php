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
        Schema::create('reply_guest_contact_messages', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('fk_sender_id');
            $table->foreign('fk_sender_id')->references('id')->on('contact_us')->onDelete('cascade');
            $table->string('reply_message')->nullable();
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
        Schema::dropIfExists('reply_guest_contact_messages');
    }
};
