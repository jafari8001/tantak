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

```
0. Update `Exceptions\Handler.php` and `Middlewares\LogRequest.php` files with last changes
1. Handle joins and preventing to overwrite search method most of the times
2. Utilize update method not to set as `null` where field is not passed
3. Auto add crud routes to `api.php` file
4. Create a command to create services
5. Add swagger to project
6. Auto create swagger annotations for crud apis
7. Auto update ActionTableSeeder actions
8. Auto create new actions and role-actions in database (sql output)

```