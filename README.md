## Mooreadice 

This a laravel 8 application built with bootstrap 4 cdn

## How to Install
To install this app locally, 
- clone the project to you machine via https://github.com/sirval/mooreadvice
- once cloned, open the folder with any prfered text editor.
- On your terminal, navigate to the folder and run *composer update* to update dependencies.

If the file is not properly formatted, go to C:\xampp\htdocs\mooreadvice\resources\views\layouts\app_master.blade.php and change {{ secure_asset('") }} to {{ asset('") } this is because this app is hosted on heroku and require ssl verified url which laravel asset wiil not give us.

once set, run on you terminal php artisan serve to view your file on a browser
