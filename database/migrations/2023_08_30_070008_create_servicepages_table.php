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
        Schema::create('servicepages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('heading1');
            $table->string('heading2');
            $table->string('heading3');
            $table->string('heading4');
            $table->string('heading5');
            $table->string('CyberSecurityStrategyTitle');
            $table->text('CyberSecurityStrategyDescription');
            $table->string('image_path')->nullable();
            $table->string('ThirdPartyRiskManagementTitle');
            $table->text('ThirdPartyRiskManagementDes');
            $table->string('BenefitsTitle');
            $table->text('BenefitsDes');
            $table->text('Benefitspoint1');
            $table->text('Benefitspoint2');
            $table->text('Benefitspoint3');
            $table->text('Benefitspoint4');
            $table->text('Benefitspoint5');
            $table->string('whysvamtitle');
            $table->text('whysvamdes');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicepages');
    }
};
