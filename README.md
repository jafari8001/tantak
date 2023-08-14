# Azarmehr-Pardazesh Laravel Base Code

## comand

```
composer install
php artisan migrate
php artisan db:seed
```

## Advanced commands

### Auto model and controller maker
This command will create :
- model with relative name filled with `$columns` and `insert` and `updateItem` functions
- controller with relative name and permissions and connected to the model
- Service with relative name
- Routes in api.php file
hint : 
    - module : Directory name which you would like your model be created in => app/Models/`module`/your-model<br />
                and your controller be created in => app/Http/Controllers/`module`/your-controller
    - migration : relative path to your desired migration file 
    - route : creates needed routes in api.php file
              c : store function route
              r : list and show function route
              u : update function route
              d : delete function route
```
php artisan auto:crud --module=<module name> --migration=<relative migration path> -route=<combination of c r u d letters>
```

## How to create a module
1. create proper migration file
2. run migration
3. use `auto:crud` to create model and controller and service and routes
4. add permissions to `ActionTableSeeder`
5. run `db:seed --path=ActionsTableSeeder` to create new permission in database
6. run `db:seed --path=RoleActionTableSeeder` to connect new permissions to admin user
7. fill proper description for fields in controller `inheritedDocsOverrides` function


## Todo
- &check; Update `Exceptions\Handler.php` and `Middlewares\LogRequest.php` files with last changes
- &cross; Handle joins and preventing to overwrite search method most of the times
- &check; Utilize update method not to set as `null` where field is not passed
- &check; Auto add crud routes to `api.php` file
- &check; Create a command to create services
- &check; Add `scribe` to project
- &check; Auto create scribe annotations for crud apis
- &cross; Auto update `ActionTableSeeder` actions
- &cross; Auto create new actions and role-actions in database (sql output)

