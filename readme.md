## Installation instructions
1. Clone the repo via this url `https://github.com/jesraygarciano/laravel-music-api.git`
2. Get inside the project folder `cd songs-demo`
3. Create a `.env` file by running the following command `cp .env.example .env`. Update your database credentials inside this `.env` file.
4. Install various packages and dependencies: `composer install`. **Note:** you have to be inside your Laravel development environment for this to work. For those using vagrant, make sure you `ssh` into Vagrant before running `composer install`.
5. Generate an encryption key for the app: `php artisan key:generate`.
6. Run migrations `php artisan migrate`
7. Run seeder `php artisan db:seed`
8. `phpunit`