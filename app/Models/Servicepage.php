<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicepage extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'descp',
        'title',
        'description',
        'heading1',
        'heading2',
        'heading3',
        'heading4',
        'heading5',
        'CyberSecurityStrategyTitle',
        'CyberSecurityStrategyDescription',
        'image_path',
        'ThirdPartyRiskManagementTitle',
        'ThirdPartyRiskManagementDes',
        'BenefitTitle',
        'BenefitDes',
        'BenefitPoint',
        'BenefitsTitle',
        'BenefitsDes',
        'Benefitspoint1',
        'Benefitspoint2',
        'Benefitspoint3',
        'Benefitspoint4',
        'Benefitspoint5',
        'whysvamtitle',
        'whysvamdes',
        // Add other fields here
    ];
}
