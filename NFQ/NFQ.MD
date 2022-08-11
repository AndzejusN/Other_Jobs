Project installation
"git clone https://github.com/AndzejusN/Works.git" (in directory where you want project must be copied)

"docker compose up --build -d" (in root directory)

"npm install"  (in directory /src)

"composer i" (in Docker container: laravel-nfq-php )

database:
Copy in directory: /NFQ-Student/other/db_copy

Or command in Docker container: nfq-student_php:

  "php artisan migrate:fresh --seed"

Other
Also maybe you will need the following commands:
"npm run watch" (in directory /src)

"npm run prod" (in directory /src)

Page navigation and structure
Header
The Index page (http://localhost:8080/ (name: Project main))

Link: http://localhost:8080/status (name: Status page)

Footer
Link: http://localhost:8080/company (name: NFQ) - information about the company which asked to make the project.

Link: http://localhost:8080/work (name: Work) - project characteristics.

Link: http://localhost:8080/about (name: About me) - About me (CV).