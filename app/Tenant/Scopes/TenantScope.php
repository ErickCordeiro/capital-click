<?php

namespace App\Tenant\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        if(checkTenantId()) {
            $builder->where('tenant_id', session('tenant_id'));
        }
    }
}