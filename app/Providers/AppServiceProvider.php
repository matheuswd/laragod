<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::component('shared.components.box', 'box');
        Blade::component('shared.components.card', 'card');
        Blade::component('shared.components.form', 'form');
        Blade::component('shared.components.input', 'input');
        Blade::component('shared.components.checkbox', 'checkbox');
        Blade::component('shared.components.alert', 'alert');
        Blade::component('shared.components.icon', 'icon');
        Blade::component('shared.components.avatar', 'avatar');
        Blade::component('shared.components.table', 'table');
        Blade::component('shared.components.date', 'date');
        Blade::component('shared.components.textarea', 'textarea');

        Blade::component('shared.views.form-group', 'FormGroup');
        Blade::component('shared.views.header', 'Header');
        Blade::component('shared.views.alerts', 'Alerts');
        
        Blade::component('shared.components.tab.tab', 'tab');
        Blade::component('shared.components.tab.nav', 'tabNav');
        Blade::component('shared.components.tab.item', 'tabItem');
        Blade::component('shared.components.tab.content', 'tabContent');
        Blade::component('shared.components.tab.panel', 'tabPanel');
    }

    public function register()
    {
        //
    }
}
