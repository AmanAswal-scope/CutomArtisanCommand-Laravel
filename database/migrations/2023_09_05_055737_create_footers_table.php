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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('footerlogo');
            $table->string('address');
            $table->string('Contactctnumber');
            $table->string('email', 255)->unique();

            $table->string('title1');
            $table->String('T1subtitle1');
            $table->String('T1subtitle2'); 
            $table->String('T1subtitle3');
            $table->String('T1subtitle4');
            $table->String('T1subtitle5');
            $table->String('T1subtitle6');
            $table->String('T1subtitle7');
            $table->String('T1subtitle8');

            $table->string('title2');
            $table->String('T2subtitle1');
            $table->String('T2subtitle2');
            $table->String('T2subtitle3');
            $table->String('T2subtitle4');

            $table->string('title3');
            $table->String('T3subtitle1');
            $table->String('T3subtitle2');

            $table->string('connectwithus');

            $table->string('copyright');
            $table->String('CopyRsubtitle1');
            $table->String('CopyRsubtitle2');
            $table->String('CopyRsubtitle3');
       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
