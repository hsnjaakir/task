# How to run on your local machine?

1. Clone this repository to your local machine.
2. Go to the folder application using cd command on your cmd or terminal
3. Run 'composer install' on your cmd or terminal
4. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows
5. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
6. Run 'php artisan key:generate'
7. Run 'php artisan migrate'
8. Run 'php artisan serve'
9. Go to http://localhost:8000/
10. Click on the search button to see the parsed data

[NB: I have done it with laravel and it's taken 3 days to be completed]
