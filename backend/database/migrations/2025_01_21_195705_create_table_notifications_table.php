<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['email', 'sms', 'push']);
            $table->text('message');
            $table->enum('status', ['sent', 'pending', 'failed'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
};
