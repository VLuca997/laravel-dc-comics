STEP 1 
    importato layout
STEP 2
    dublicato file .env
STEP 3
    utilizzato i comandi da terminale in vsc : 
        composer install  
        php artisan key:generate
        npm i
        npm i sass --save-dev
        npm i bootstrap
        npm run build
        php artisan serve
            se il server va:
                php artisan make:migrate create_comics_table       (Creiamo in database/migration un file.php con il nome al plurale e le funzioni app e down gia semi definite, 
                                                                    dobbiamo aggiungere i campi che ic arrivano dal nostro comic.php in congfig/comic.php)     
        salviamo i comics nel DB:
            aggiungiamo un entità tramite le CRUD:
                creiamo una tabella/ ovvero una migration:
                    php artisan make:migrate create_comics_table
                    php artisan migrate
STEP 4 
    creo il model associato alla mia entità, al singolare ( Comics , quindi Comic) tramite     
             php artisan make:model Comic
        (IL MODEL HA BISOGNO DELLA MIGRATION ED IL SEEDER HA BISOGNO DEL MODEL, QUINDI    MIGRATION, MODEL, SEEDER)
STEP 5 
    creo il seeder associato alla mia entità con il comando    ( IL SEEDER IN PRATICA è CREARE LE RIGHE DIRETTAMENTE DA LARAVEL INVECE CHE A MANO DA PHPMYADMIN)  
            php artisan make:seeder ComicSeeder
    riempio il seeder con le operazioni necessarie a salvare i miei dati di test
                