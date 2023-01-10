# Laravel task app
    I've implemented some endpoints. No frontend styles are applied.
    I think i would better use doctrine as orm here. Did not implement all endpoints and more complex features like auth for /manage system part. Just need time to investigate laravel more.
    
### Getting Started
      Run commands to start
      Up containers:
      - docker-compose up -d

      Go into backend container:
      - docker-compose exec backend /bin/sh

      then inside the container run:
         - composer install
         - php artisan migrate
         - php artisan db:seed

       done

       localhost:8000 - main page
       localhost:8000/manage - manage page