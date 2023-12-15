## Installation

### 1. Clone this repo & update dependencies using composer.

```sh
$ cd (project-folder)
$ composer update
```

### 2. Copy the .env.example file.

```sh
$ cp .env.example .env
```

### 3. Create a new MySQL database dan set up the new database in .env file.

```sh
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=
```

.env file

```sh
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:cmkir3ycTuAONiEP/pza+tfZAWyWXNmJ1sp16ZBPZCU=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_blog
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

```

### 4. Open the seeder file located in `database/seeders/DatabaseSeeder.php` for login credential.

```php
DB::table('users')->insert([
	'name' => 'admin', // user name
	'email' => 'admin@google.com', // user email
	'role' => 'admin', // role
	'password' => Hash::make("12345") // password
]);
```

### 5. Create the application key

```sh
$ php artisan key:generate
```

### 6. Run migration & seed

```sh
$ php artisan migrate --seed
```

### 7. Run the project

```sh
$ php artisan serve
```

## II ENVIROMENT

### LOCAL :

--> OS: Windows 10 <br/>
--> Code editor : VS Code <br/>
--> XAMPP: ver(latest) 2023

### DEPLOYMENT ONLY :

    --> SERVER: VPS or Dedicated share
