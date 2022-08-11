## Project installation

- "git clone https://github.com/AndzejusN/Works.git" (in directory where you want project must be copied)

- "docker compose up --build -d" (in root directory)

- "npm install"  (in directory /src)

- "composer i" (in Docker container: laravel-tietoevry-php )

### database:

- Copy in directory: Tietoevry-vegetarian/other/db_copy

- Or command in Docker container: laravel-tietoevry-php:

  "php artisan migrate:fresh --seed"

### Other

- Also maybe you will need the following commands:

"npm run watch" (in directory /src)

"npm run prod" (in directory /src)

## Page navigation and structure

- Header

The Index page (http://localhost:8080/ (name: Let's count)) - in three steps, count your body's needs in calories.

Link: http://localhost:8080/menu (name: Week menu) - in two steps, get a list of four products which must be used in a day. (wheet/fruit/vegetable/nut groups)

- Footer

Link: http://localhost:8080/company (name: Tietoevry) - information about the company which asked to make the project.

Link: http://localhost:8080/work (name: Work) - project characteristics.

Link: http://localhost:8080/about (name: About me) - About me (CV).
