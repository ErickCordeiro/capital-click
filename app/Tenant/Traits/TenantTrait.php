<?php

namespace App\Tenant\Traits;

use App\Models\Tenant;
use App\Tenant\Scopes\TenantScope;

trait TenantTrait
{
    protected static function booted(): void
    {
        static::addGlobalScope(new TenantScope);
    
        // Validate the tenant_id exists in session and not null
        if(checkTenantId()) {

            //method to implement tenant_id in creating a new register or update any register
            static::creating(function($model){
                $model->tenant_id = session('tenant_id');
            });
        }
    }

    //Creating relationship tenant
    public function tenant(): Tenant
    {
        return $this->belongsTo(Tenant::class);
    }
}
