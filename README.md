## CRUD API


Installations:
1. Install Xamp(once) - will also automatically install php
2. Install Composer(once)
3. Install laravel(once)
4. Install Tabine AI autocompletion extension in VS


- Check php version:
```
	php -v
```
- Check composer version:
```
	composer --version
```
- Install laravel globally in cmd by running following command in cmd:
```
	composer global require laravel/installer
```
- check laravel version:
```
	laravel -v
```


Create new Laravel project:
```
	laravel new laravel_mysql_crud_api
```
start Laravel's local development server using the Laravel's Artisan CLI serve command:
```
	cd laravel_mysql_crud_api
	php artisan serve
```
<br>
then web will be  visible at:
```
http://127.0.0.1:8000/
```
<br>
- create a student model
```
    php artisan make:model Student
```
- or [MOST PREFERRED METHOD]
- create a student model and a migration
```
    php artisan make:model Student -m
```
<br>
- Making Controller run:
```
    php artisan make:controller StudentController
```
- or
- Making Controller with api methods run: .............  "--api" will create associated methods in api such as create, update, delete
```
    php artisan make:controller StudentController --api
```
Checking all routes: to check all routes, run in cmd:
```
    php artisan route:list
```
Migrate:
```
    php artisan migrate
```
1. POST -> Create student:
- endpoint ->  http://127.0.0.1:8000/api/create/create
- body
```
{
    "name": "Martin",
    "age": 22
}
```

- result
```
{
    "name": "Martin",
    "age": 22,
    "updated_at": "2023-03-02T08:10:01.000000Z",
    "created_at": "2023-03-02T08:10:01.000000Z",
    "id": 1
}
```


2. GET -> get all students:
- endpoint ->  http://127.0.0.1:8000/api/all
- response:
```
[
    {
        "id": 1,
        "created_at": "2023-03-02T08:10:01.000000Z",
        "updated_at": "2023-03-02T08:10:01.000000Z",
        "name": "Martin",
        "age": 22
    },
    {
        "id": 2,
        "created_at": "2023-03-02T08:21:14.000000Z",
        "updated_at": "2023-03-02T08:21:14.000000Z",
        "name": "Ken",
        "age": 27
    }
]
```

3. GET -> get one student by id:
- endpoint ->  http://127.0.0.1:8000/api/all/1
- response :
```
{
    "id": 1,
    "created_at": "2023-03-02T08:10:01.000000Z",
    "updated_at": "2023-03-02T08:10:01.000000Z",
    "name": "Martin",
    "age": 22
}
```

4. PUT -> Update student by id
- endpoint-> http://127.0.0.1:8000/api/update/1
- body
```
{
    "name": "Martin 1",
    "age": 24
}
```
- reponse
```
{
    "id": 1,
    "created_at": "2023-03-02T08:10:01.000000Z",
    "updated_at": "2023-03-02T08:44:24.000000Z",
    "name": "Martin 1",
    "age": 24
}
```

