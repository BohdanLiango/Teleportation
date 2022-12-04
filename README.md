



<p align="center"><img src="https://res.cloudinary.com/practicaldev/image/fetch/s--VGqIwoHR--/c_fill,f_auto,fl_progressive,h_320,q_auto,w_320/https://dev-to-uploads.s3.amazonaws.com/uploads/organization/profile_image/4464/54f08b51-b54b-44c5-8d6d-1c6639f52520.png" alt="Teleport Logo"></p>

## Install
1) Clone the repository.
```
git clone https://github.com/BohdanLiango/Teleportation.git
```
2) Install the Laravel extended repositories.
```
composer install
```
3) Run key generate.
```
php artisah key:generate
```
4) Set the basic config.
```
cp .env.example .env
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
