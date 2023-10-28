<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // システム管理者のみに許可
        Gate::define('system-master-higher', function ($user) {
            return ($user->role_id === 1);
        });
        // 管理者およびシステム管理者のみに許可
        Gate::define('admin-higher', function ($user) {
            return ($user->role_id <= 2 && $user->role_id >= 1);
        });
    }
}
