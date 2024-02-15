# Artisan CLI

## Database

### Migration
Genrate products table database migration
```
php artisan make:migration create_products_table
```

Run migration
```
php artisan migrate
```

Roll back the recent migrations
```
php artisan migrate:refresh
```

### Seeder
Run Product seeder
```
php artisan db:seed --class=ProductSeeder
```

## Controllers
Generate a controller
```
php artisan make:controller ProductController
```

## Eloquent

### Factory
Genrate product factory
```
php artisan tinker
\App\Models\Product::factory()->create();
```

### Model
Generate a Model
```
php artisan make:model Product
```
