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
hint : 
    - module : Directory name which you would like your model be created in => app/Models/`module`/your-model<br />
                and your controller be created in => app/Http/Controllers/`module`/your-controller
    - migration : relative path to your desired migration file 
```
php artisan auto:crud --module=<module name> --migration=<relative migration path>
```

## Todo


- &check; Update `Exceptions\Handler.php` and `Middlewares\LogRequest.php` files with last changes
- &cross; Handle joins and preventing to overwrite search method most of the times
- &cross; Utilize update method not to set as `null` where field is not passed
- &cross; Auto add crud routes to `api.php` file
- &cross; Create a command to create services
- &cross; Add `swagger` to project
- &cross; Auto create swagger annotations for crud apis
- &cross; Auto update `ActionTableSeeder` actions
- &cross; Auto create new actions and role-actions in database (sql output)

