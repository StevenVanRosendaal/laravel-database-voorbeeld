Stap 1: Haal repo binnen

Stap 2: maak in phpmyadmin de database `database_voorbeeld` aan.

Stap 3: open cmd (of een andere terminal) en cd naar de root folder van mijn project

Stap 4: run: `composer install`

Stap 5: run: `npm install`

Stap 6: run: `npm run dev`

Stap 7: run: `php artisan serve`

Stap 8: run: `cp .env.example .env`

Stap 9: run: `php artisan key:generate`

Stap 10: run: `php artisan migrate`

Stap 11: ???

Stap 12: PROFIT!

Kijk vooral naar de volgende bestanden:

`/.env`

`/database/migrations/2021_03_05_122010_create_photos_table.php`

`/app/Http/Controllers/PhotoController.php`

`/app/Models/Photo.php`

`/routes/web.php`

`/resources/view/photos/view`

`/resources/view/photos/add`