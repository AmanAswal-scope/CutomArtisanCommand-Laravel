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
        Schema::create('aboutuspages', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->text('Description');
            $table->string('TeamTitle');

            $table->string('Member1Name');
            $table->text('Member1Des');
            $table->string('Member1Img')->nullable();

            $table->string('Member2Name');
            $table->text('Member2Des');
            $table->string('Member2Img')->nullable();

            $table->string('Member3Name');
            $table->text('Member3Des');
            $table->string('Member3Img')->nullable();

            $table->string('Member4Name');
            $table->text('Member4Des');
            $table->string('Member4Img')->nullable();

            $table->string('Member5Name');
            $table->text('Member5Des');
            $table->string('Member5Img')->nullable();

            $table->string('Member6Name');
            $table->text('Member6Des');
            $table->string('Member6Img')->nullable();

            $table->string('Member7Name');
            $table->text('Member7Des');
            $table->string('Member7Img')->nullable();

            $table->string('Member8Name');
            $table->text('Member8Des');
            $table->string('Member8Img')->nullable();

            $table->string('Member9Name');
            $table->text('Member9Des');
            $table->string('Member9Img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutuspages');
    }
};
