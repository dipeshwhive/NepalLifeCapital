<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    // Table name (optional if it follows convention)
    protected $table = 'site_settings';

    // Mass assignable fields
    protected $fillable = [
        'Favicon',
        'SiteLogo',
        'SiteName',
        'Email',
        'Address',
        'PhoneNumber',
        'FooterText',
        'MapLink',
        'FooterDescription',
        'HomeFeaturedImage',
        'HomeTitle',
        'HomeSubTitle',
        'HomeRouteName',
        'NavButtonTitle1',
        'NavButtonsTitle2',
        'NavButtontitle3',
        'NavButtonLink1',
        'NavButtonLink2',
        'NavButtonLink3',
    ];

    // Optional: cast timestamps (default is fine)
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * You can add helper methods here if needed, for example:
     */

    public function faviconUrl()
    {
        return $this->Favicon ? asset($this->Favicon) : null;
    }

    public function logoUrl()
    {
        return $this->SiteLogo ? asset($this->SiteLogo) : null;
    }
}
