# Laravel task app
    I've implemented only a small part of the app with no frontend. Just some archtecture moments (get Article list). I guess i would better use doctrine here as ORM. Looks like laravel has DI implementation so it should be used too. Data validation, error handling are needed too.
    Auth for manage api.
### Getting Started
###### Run commands in the root folder
 - docker-compose up -d 
-  docker-compose exec backend /bin/sh 
###### execute commands in "backend" container
- php artisan migrate
- php artisan db:seed

localhost:8000