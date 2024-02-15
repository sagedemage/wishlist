# wishlist

## Dependencies
Install dependencies for Laravel
```
sudo apt install php-dev php-bcmath php-curl php-json php-mbstring php-mysql php-tokenizer php-xml php-zip
```

## Database Quick Setup
Run MySQL docker container
```
docker compose up
```

Roll back the recent migrations
```
php artisan migrate:refresh
```

Run Product seeder
```
php artisan db:seed --class=ProductSeeder
```

## Run program
Run MySQL docker container
```
docker compose up
```

Run Laravel program
```
php artisan serve
```

## APIs
[APIs](./docs/api.md)

## Artisan CLI
[Artisan CLI](./docs/artisan_cli.md)
