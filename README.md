# IF184504_WEBPRO_C_Midterm
# Website MusikInAjah with Laravel Framework 6.20.35

# Installation
1. Clone repository, can be downloaded .zip or with the git clone command like this \
```
git clone https://github.com/fitrahmutiara0108/C_Midterm.git
```
2. In cmd, move to the prognet8 folder for example \
```
cd c:/xampp/htdocs/prognet8
```
3. Then install composer \
```
composer install
```
4. Copy example .env like this \
```
cp .env.example .env`
```
6. Open the .env folder in the folder and edit the file DB_DATABASE = laravel --> ``DB_DATABASE = mysql`` \
7. Do the command to generate a random string that is used as the key required for all encryption and decryption processes in the application using this: \
```
php artisan key:generate
```
9. Migrate the table to the database with the command using this: \
```
php artisan migrate -seed
```
9. Then do the command below to run the website on localhost using this: \
```
php artisan serve
```
10. Ready to run...
