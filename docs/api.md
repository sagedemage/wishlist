# APIs

GET /api/product/{id} 
- example: /api/product/1

Response Example
```
{
  "name": "Nvidia RTX 3070",
  "price": 100
}
```

POST /api/product

Request Body
```
{
  "name": "AMD Radeon 5000", 
  "price": 500.00
}
```

PATCH /api/product

Request Body
```
{
  "id": 5,
  "name": "Nvidia GTX 1060", 
  "price": 200.11
}
```

DELETE /api/product/{id}
- example: /api/product/4
```
{
  "msg": "Deleted product"
}
```
