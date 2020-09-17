# How to reproduce the issue.
* Run "composer install"
* Look at "app/tests/Feature/ExampleTest.php"
* Run "vendor/bin/phpunit"
    * Initially using actingAs to set the user to "USER NAME 1".
        * The web guard driver user() returns "USER NAME 1".
        * The sanctum guard driver user() returns "USER NAME 1".
    * Then use actingAs to set the user to "USER NAME 2".
        * The web guard driver user() returns "USER NAME 2".
        * **The sanctum guard driver user() returns "USER NAME 1".**

## The second and later actingAs have not been able to rewrite the sanctum guard driver's authentication.
