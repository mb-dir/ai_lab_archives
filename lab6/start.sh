/opt/lampp/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ai1_lab6;" # Linux

/Applications/xampp/xamppfiles/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ai1_lab6;"  # Mac

php -r "copy('.env.example', '.env');"

composer install

php artisan key:generate

php artisan storage:link

code .
