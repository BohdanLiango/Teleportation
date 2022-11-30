



<p align="center"><img src="https://lever-client-logos.s3.us-west-2.amazonaws.com/5c728dd2-5528-404e-8ea0-c89a24115dea-1605615894379.png" width="400" alt="Teleport Logo"></p>

## Install
1) Clone the repository.
```
git clone https://github.com/BohdanLiango/Teleportation.git
```
2) Run key generate.
```
php artisah key:generate
```
3) Set the basic config.
```
cp .env.example .env
```
4) Install the Laravel extended repositories.
```
composer install
```
5) Create database (MariaDB, Mysql).
6) In file .env change this line to your data.
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
6) Run migrates.
```
php artisan migrate
```
7) Run default data.
```
php artisan db:seed
```

8) Run application.
```
php artisan serv
```


## Enjoy
