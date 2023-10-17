
# Task for job

## Установка и настройка

####  1. Клонировать проект

`git clone https://github.com/umarov-safar/simple-task.git`

#### Создайте  `.env` файл в корневом проекте и заполните его.
`cp .env.example .env`

Данные для БД
```
DB_DATABASE=example
DB_USERNAME=example
DB_PASSWORD=secret
```

#### Внутри папки `app` находится проект laravel, тоже внутри папки создайте файл `.env`.
`cp .env.example .env`

`DB_DATABASE, DB_USERNAME, DB_PASSWORD` — эти даные должны быть из файла .env  из корневой папки.

```
DB_CONNECTION=pgsql
DB_HOST=pgsql 
DB_PORT=5432
DB_DATABASE=example
DB_USERNAME=example
DB_PASSWORD=secret
```
#### В корневом проекте за пускаете 

`docker compose up`

#### Laravel and NPM
`docker compose exec app bash`

`composer install`

`php artisan key:generate`

`php artisan migrate`

`php artisan optimize`

`npm install`

`npm run build`

#### Swagger docs url
http://localhost:8100/docs/swagger