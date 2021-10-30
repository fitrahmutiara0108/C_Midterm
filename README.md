# IF184504_WEBPRO_C_Midterm

**Name of Member**
- Fitrah Mutiara (05111940000126)
- Aprilia Annisa Suryo (05111940000199)
- Nadia Tiara Febriana (05111940000217)

# Website MusikInAjah with Laravel Framework 6.20.35 #

# Installation
1. Clone repository, can be downloaded .zip or with the git clone command like this \
```
git clone https://github.com/fitrahmutiara0108/C_Midterm.git
```
2. In cmd, move to the file folder for example \
```
cd c:/xampp/htdocs/file
```
3. Then install composer \
```
composer install
```
4. Copy example .env like this \
```
cp .env.example .env`
```
5. Open the .env folder in the folder and edit the file 
```
DB_DATABASE = laravel --> DB_DATABASE = mysql
``` 
6. Do the command to generate a random string that is used as the key required for all encryption and decryption processes in the application using this: \
```
php artisan key:generate
```
7. Migrate the table to the database with the command using this: \
```
php artisan migrate -seed
```
8. Then do the command below to run the website on localhost using this: \
```
php artisan serve
```
9. Ready to run...
