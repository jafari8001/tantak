# Base Project Code

## Initializing commands

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
