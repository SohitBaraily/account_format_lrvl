<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyContact extends Model
{
    /**
     * Get the conpany that owns the CompanyContact
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conpany(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
