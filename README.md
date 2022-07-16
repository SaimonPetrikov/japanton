# japanton Backend
Innovative service - auto parsing online

1) Клонировали репозиторий(или обновить репозиторий)
2) composer install
3) Создать .env файл в корне проекта(содержимое взять в группе в тг)
3) docker-compose up -d
4) docker-compose exec app php artisan key:generate
5) docker-compose exec app php artisan config:cache
6) Создание пользователя MySQL
   1. docker-compose exec db bash
   2. mysql -u root -p
   3. GRANT ALL ON laravel.* TO 'laraveluser'@'%' IDENTIFIED BY 'your_laravel_db_password';
   4. FLUSH PRIVILEGES;
    Дальше выходим из mysql -> EXIT; и из контейнера exit
7) docker-compose exec app php artisan migrate
8) После завершения миграции вы можете отправить запрос для проверки правильности подключения к базе данных с помощью команды tinker:
   1. docker-compose exec app php artisan tinker
   2. \DB::table('migrations')->get(); 
   3. Если Output
      => Illuminate\Support\Collection {#2856
          all: [
              {#2862
              +"id": 1,
              +"migration": "2014_10_12_000000_create_users_table",
              +"batch": 1,
              },
              {#2865
              +"id": 2,
              +"migration": "2014_10_12_100000_create_password_resets_table",
              +"batch": 1,
              },
          ],
        } 
