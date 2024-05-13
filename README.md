## Requirements

- PHP 8.2
- Composer
- MySQL
- Laravel required php extensions

## Installation process

MySQl: Please make copy of .env.example file into .env and make the following changes:

- DB_CONNECTION:mysql
- DB_HOST:localhost
- DB_PORT:3306
- DB_DATABASE:YOUR_DATABASE_NAME
- DB_USERNAME:YOUR_MYSQL_DATABASE_USER_NAME
- DB_PASSWORD:YOUR_MYSQL_DATABASE_USER_PASSWORD

Then run the following command:
---
    php artisan migrate:fresh --seed
    php artisan serve
---

## Checking the result
Use the following GET route:
#### localhost:8000/api/booking/conflict?date=2024-05-10
Or check the following link in your browser:
#### localhost:8000/booking/conflict?date=2024-05-10

Please remember to change the date based on seeded data.

## Running Tests
Please run the following command to run the tests:

---
    php artisan test
---
