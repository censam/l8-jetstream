JetStream , Fortify , Livewire with L8 
============

1. composer require laravel/jetstream

2. php artisan jetstream:install livewire --teams

3. npm install

4. npm run dev

5. enabled features in jetstream
   //config/jetstream.php
        Features::termsAndPrivacyPolicy(),
        Features::profilePhotos(),
        Features::api(),

6. enable fortify features too if needed
    //config/fortify.php
        // Features::emailVerification(),

7. php artisan vendor:publish --tag=jetstream-views

8. php artisan vendor:publish --tag=jetstream-routes

9.  Override relevant vendor routes in  "jetstream"
    vendor\laravel\jetstream\routes\livewire.php --or-- vendor\laravel\jetstream\routes\inertia.php
    to-------->
    to check that files configurations
    vendor\laravel\jetstream\src\JetstreamServiceProvider.php -> configureRoutes() method

    \app\Providers\JetstreamServiceProvider.php -> register method  JetStream::ignoreRoutes();
    add protected function configureRoutes()

10. Override relevant vendor routes in  "fortify"
    vendor\laravel\fortify\routes\routes.php
    to-------->
    to check that files configurations
    vendor\laravel\fortify\src\FortifyServiceProvider.php -> configureRoutes() method

    app\Providers\FortifyServiceProvider.php -> register method   Fortify::ignoreRoutes(); 
    add protected function configureRoutes()

11. Customizing The Authentication Pipeline
    #https://jetstream.laravel.com/2.x/features/authentication.html#customizing-user-authentication
    
