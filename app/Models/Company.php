<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    /**
     * Get all of the company_contact for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function company_contacts(): HasMany
    {
        return $this->hasMany(CompanyContact::class);
    }
    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }
}
