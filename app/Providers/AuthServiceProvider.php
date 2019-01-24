<?php

namespace App\Providers;
use App\User;
use App\Policies\PostPolicy;

use App\client;
use App\sale;
use App\shop;

use App\soft;
use App\discount;


use App\Policies\ClientPolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
         User::class => PostPolicy::class,
         client::class => ClientPolicy::class,
         sale::class => ClientPolicy::class,
         shop::class => ClientPolicy::class,
         soft::class => ClientPolicy::class,
         discount::class => ClientPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // мое творчество
        //Gate::define('admin', function ($user) {
      //    if($user->dost === 0 )
      //      return true;
    //      else
    //        return false;
  //  });

    }
}
