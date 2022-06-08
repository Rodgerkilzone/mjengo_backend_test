# mjengo_backend_test
### This is a Laravel backend for a Simple Blog Post
## Download and Install composer
Link => https://getcomposer.org/download/
## Download and Install Xampp
Link => https://www.apachefriends.org/download.html
## Run xampp and create a laravel named database.
## Open command prompt and navigate to the project folder.
## Enter the following commands in the command prompt window
1.	php artisan passport:install
2.	php artisan key:generate
3.	php artisan migrate
4.	php artisan db:seed

## To Run the application run the following command
6.	php artisan serve

NB: By default the application will run on
http://localhost:8000/

## Apis Endpoints
### Login a user
Post=> http://localhost:8000/api/login <br/>
Object {
"email":"john@gmail.com",
"password":"12345678"
}
### Register a user
Post=> http://localhost:8000/api/register<br/>
Object {
"name":"john",
"email":"john@gmail.com",
"password":"12345678"
}
### Post a blog
Post=> http://localhost:8000/api/posts<br/>
Object {
"title":"Post title",
"body":"Post Body"
}
### Update a blog
Update=> http://localhost:8000/api/posts/:id<br/>
Object {
"title":"Post title",
"body":"Post Body"
}
### Delete a blog
Delete=> http://localhost:8000/api/posts/:id
