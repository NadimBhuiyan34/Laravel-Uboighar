<?php

namespace App\Providers;
use App\Policies\SellbookPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\sellbook;
use App\Models\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    Gate::define('sellbook',[SellbookPolicy::class,'viewAny'] ) ;
    Gate::define('sellbook_update',[SellbookPolicy::class,'update'] ) ;
    
    Gate::define('admin-link', function (User $user) {
        return $user->role_id === 1;
    });
         
    }
}
