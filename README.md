composer install
npm i
cp .env.example .env
php artisan migrate:fresh --seed
php artisan storage:link
