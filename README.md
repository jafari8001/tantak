# Azarmehr-Pardazesh Laravel Base Code

## Comand

```
php artisan migrate
php artisan db:seed
php artisan migrate:fresh
php artisan migrate:refresh --seed
php artisan make:seeder TableSeeder
php artisan make:migration create__table

sudo apt install php8.1-gd
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

