Deployment for ITCE RSS with Symfony2

1) Get Composer with command :
-----------------------------

    php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"

2) Get Symfony2 standard components :
------------------------------------

    php composer.phar install

3) Configuration for DB
-----------------------
	- Edit app/config/parameters.yml to config database and config host
	- Edit app/config/parameters.yml to config time_cron that to run cron job

4) Generate DB and Entity
-------------------------

    - Run in command line to generate database:
        php app/console doctrine:schema:update --force

    - Setup default User, Language run in command line:
        php app/console doctrine:fixtures:load

5) Clear all cache before run application
-----------------------------------------
    php app/console assets:install web
    php app/console cache:clear


Have fun !
