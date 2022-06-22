# Laravel CO2 project
##### _(june 2022)_
kopieer het uiterlijk / idee van https://www.co2thermometer.nl/ in laravel, en zorg dat je de resultatenpagina een eigen draai geeft.
*(zie PDF voor meer details)*

### Some things to note
* laravel moet geinstalleerd zijn. bekijk https://www.section.io/engineering-education/laravel-beginners-guide-blogpost/ voor meer info.
* xampp moet geinstalleerd zijn.

## Hoe het op te starten
1. start XAMPP control panel en start Apache en MySQL
2. ga naar http://127.0.0.1/phpmyadmin/index.php en maak een nieuwe tabel die my_blog heet.
3. plaats de co2-latest folder in the xampp>htdocs folder
4. navigeer naar deze map in commando prompt {win+r > CMD} (CD /xampp/htdocs/co2-latest)

## deze commandos kunnen gebruikt worden;
### php artisan migrate --force
#### dit maakt de database tabel

### php artisan tinker
##### dit opent het tinker menu, waarin je dit kunt doen
#### \App\Models\Bedrijven::factory()->times(25)->create();
##### dit maakt 25 dummy datapunten in de database
##### *control+C om uit tinker te gaan*
![](https://media.discordapp.net/attachments/978186495057887233/989087714496364544/unknown.png)
![](https://media.discordapp.net/attachments/978186495057887233/989084688670941194/unknown.png)

### php artisan serve
##### dit start de server op, op 127.0.0.1:8000
##### *CTRL+C om de server te stoppen*

# Navigatie/sitemap 
## Home 
algemene info en de startknop `(127.0.0.1:8000)` 

![](https://media.discordapp.net/attachments/978186495057887233/989083752883961906/unknown.png)
* klik op start de meter om verder te gaan naar de Create pagina
## Create
maak een nieuw datapunt/bedrijf `(127.0.0.1:8000/bedrijven/create)` 

![](https://media.discordapp.net/attachments/978186495057887233/989083989916680212/unknown.png)
* je moet alles invullen; 
* + max en minimale aantallen die ingevuld kunnen worden  
* terug -> home pagina
* maak data -> info pagina 
## Info
opgeslagen data en aantal CO2 `(127.0.0.1:8000/bedrijven/ID)` 

![](https://media.discordapp.net/attachments/978186495057887233/989084398781607936/unknown.png)
* de database wordt uitgelezen en in een tabel gezet  
* het aantal CO2 wordt (op een niet goede manier) berekend en erin gezet.  
* bewerk data -> edit pagina  
* verwijder data -> delete de data; en dan naar home pagina 
## Edit
bewerk een datapunt/bedrijf `(127.0.0.1:8000/bedrijven/ID/edit)` 

![](https://media.discordapp.net/attachments/978186495057887233/989084470961406002/unknown.png)
* de database wordt uitgelezen en de opgeslagen info automatisch ingevuld, hierna werkt het hetzelfde als de create pagina  
* terug -> info pagina 
* maak data -> info pagina 
## Debug / Admin
overzicht van alle data `(127.0.0.1:8000/bedrijven/)` 

![](https://media.discordapp.net/attachments/978186495057887233/989084074247340092/unknown.png)
* alle bedrijven uit de database worden hier weergegeven >>voeg bedrijf toe -> create pagina >>naam bedrijf -> info pagina (van dat bedrijf)


**-CoderMan**

