<?php

namespace App\Providers;

use App\Models\Task;
use App\Models\Order;
use App\Models\Finance;
use App\Models\Project;
use App\Models\Customer;
use App\Policies\TaskPolicy;
use App\Policies\OrderPolicy;
use App\Policies\FinancePolicy;
use App\Policies\ProjectPolicy;
use App\Policies\CustomerPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Customer::class, CustomerPolicy::class);
        Gate::policy(Finance::class, FinancePolicy::class);
        Gate::policy(Order::class, OrderPolicy::class);
        Gate::policy(Project::class, ProjectPolicy::class);
        Gate::policy(Task::class, TaskPolicy::class);
    }
}
