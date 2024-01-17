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
        Schema::create('contactpages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            
            $table->string('contacttitle1');
            $table->string('title1address');
            $table->string('title1number');
            $table->string('title1number2');
            $table->string('title1email');

                        
            $table->string('contacttitle2');
            $table->string('title2address');
            $table->string('title2number');
            $table->string('title2number2');
            $table->string('title2email');

            $table->string('contacttitle3');
            $table->string('title3address');
            $table->string('title3number');
            $table->string('title3email');

            $table->string('contacttitle4');
            $table->string('title4address');
            $table->string('title4number');
            $table->string('title4email');

            $table->string('contacttitle5');
            $table->string('title5email');

            $table->string('regionaltitle');
            $table->string('regional1title');
            $table->string('regional1address');
            $table->string('regional1number');
            $table->string('regional1email');

        
            $table->string('regional2title');
            $table->string('regional2address');
            $table->string('regional2number');
            $table->string('regional2email');

         
            $table->string('regional3title');
            $table->string('regional3address');
            $table->string('regional3number');
            $table->string('regional3email');

            $table->string('regional4title');
            $table->string('regional4address');
            $table->string('regional4number');
            $table->string('regional4email');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactpages');
    }
};
