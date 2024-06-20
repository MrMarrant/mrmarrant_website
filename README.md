# MrMarrant WebSite

## ⚙️ Installations

## 🧩 Config

### Complete Install Windows (11)
- Download PHP 8.2 with [XAMMP](https://www.apachefriends.org/download.html).
- Install Composer at root project :
```php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"```
```php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"```
```php composer-setup.php```
```php -r "unlink('composer-setup.php');"```

- Crete new file ```composer.bat``` at root project.
- Tap command line :
```Set-Content composer.bat '@php "%~dp0composer.phar" %*'```
- ```.\composer install```
- ```.\composer require symfony/webpack-encore-bundle``` Install lib encore
- ```.\composer require symfony/dotenv``` Install lib dotenv
- Install NodeJS(v19.4.0)
- ```npm install```

### Soft Install
```composer install``` Installer les lib composer.<br><br>
```composer require symfony/webpack-encore-bundle``` Installer la lib encore
```composer require symfony/dotenv``` Installer la lib dotenv
```npm install```

### Launch server
```symfony server:start``` Pour lancer le serveur.<br><br>
```npm run build``` Pour build les changements de style du serveur.

## Static Page

Read the documentation :<br>
https://stenopephp.github.io/Stenope/

`bin/console -e prod stenope:build ./static`

## Docker

### Build le Container
- docker build . -f ./docker/Dockerfile

Changer le nom de l'image dans le docker-compose.yml par l'id généré par la commande précédente.

- cd docker
- docker-compose up -d

### Accéder au container
- docker run -it [id] bash

## 📌 Dépendance

- PHP : 8.2 <br>
- Symfony : 6.2 <br>
- NodeJs : 19.4.0<br>
