# This first open sourse laravel project in github
## common comand used
- create new project
> composer create-project laravel/laravel example-app
-  to start laravel server 
>  php artisan serve 
- to create new  controller
>php artisan make:controller controllerName
- to show all routes
> php artisan route:list
- to create new  migration (to bulid table in DB)
>php artisan make:migration create_TableName_table
- To run all of your outstanding migrations, execute the migrate Artisan command:
>php artisan migrate 
- to update table 
> php artisan make:migration add_auther_to_articels_table --table=tableName
- we use modle to deal with database
-  to create modle , migration ,controller and resoses


>php artisan make : model ModleName -mcr
- to install ui
> composer require laravel/ui
- to install authentication
> php artisan ui bootstrap --auth

## how to buid project
1. install composer from offical website
2. install laravel
3. create new project
4. cd to the project
5. configer the database
5. create controller modle and migration

5. bulid migration to set the colume in db
5. bulid   protected $fillable in modle to put the files you want
5. create roure to controller
5. bulid viow
5. bulid methode to handle data from modle and viow

5. execute the migrate Artisan
5. handle viow to transfare data 
5. bulid contrller methode
5. start laravle server