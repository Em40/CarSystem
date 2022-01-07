# CarSystem

## Idea
This site is catalog for cars for yourself and your family.
CarSystem is a project of car info. Information on car data contains travelled distance, manufacturer, model and type. CarSystem information is collected from publicly available sources. You can search cars by: Year, Models and Manufacturers.

## How to start
* run composer install
* make .env file in root directory and configurate it
* run all migrates
* if you want to seed databse run - php artisan db:seed

## Project
Project has seeds for all database models

### Models
1. Manufacturers
    * id:bigint
    * name:varchar
    * founded_on:date

2. Car_models
    * id:bigint
    * name:varchar
    * manufacturer_id:bigint - references(Manufacturer)

3. Cars
    * id:bigint
    * name:varchar
    * production_year:date
    * travelled_kilometers:int
    * car_models_id:bigint - references(Car_models)
    * manufacturer_id:bigint - references(Manufacturers)

4. Images
    * id:bigint
    * description:varchar
    * path:varchar
    * url:varchar

5. User
    * id:bigint
    * name:varchar
    * email:varchar
    * password:varchar
    * email_verified_at:timestamp
    * remember_token:varchar

* all models has created_at:timestamp and updated_at:timestamp

### Controllers
We have the controllers with basic CRUD operations

* ManufacturersController
* CarModelsController 
* CarsController (in CarsController we can search through cars by "Production date",  "Models", "Manufacturers")
* ImageController

### Views
In resources/views/ we have all the views with for every function the app has... (create, edit, delete, list all items, and search)

### Routes
All public routes are in web.php
