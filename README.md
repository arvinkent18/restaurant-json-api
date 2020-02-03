## Laravel Restaurant JSON API
> Laravel 6.2 API JSON API is an application that uses the standard response of JSON API from RESTful APIs' endpoints

``` bash
# Install Dependencies
composer install

# Generate key
php artisan key:generate

# Run migrations
php artisan migrate
```

## Endpoints

### Get all restaurants  
``` bash
GET api/v1/restaurants
```

### Get single restaurant
``` bash
POST api/v1/restaurants/{id}
name
```

### Update restaurant
``` bash
PATCH api/v1/restaurants/{id}
```

### Delete restaurant
``` bash
DELETE api/v1/restaurants/{id}
```

## Application Info

### Author

Arvin Kent S. Lazaga

### Version
1.0.0

### Testing
Unit Testing in ongoing.
