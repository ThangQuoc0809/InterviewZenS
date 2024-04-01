# Install
### 1. Download repo
> git clone https://github.com/ThangQuoc0809/InterviewZenS.git

### 2. Coppy file .env.example to .env

### 3. Run commandline
> composer install
> 
> php artisan key:generate

### 4. Setup Database

- Create database in your Sql or MySql or ...
- Add your database to .env file
- Run commandline: 
> php artisan migrate

[Find more guide set up](https://laravel.com/docs/11.x#databases-and-migrations)

### 5. Run repo
> php artisan serve

