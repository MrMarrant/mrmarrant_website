# MrMarrant WebSite

## ⚙️ Installations

## 🧩 Config


```composer install``` Installer les lib composer.<br><br>
```composer require symfony/webpack-encore-bundle``` Installer la lib encore
```composer require symfony/dotenv``` Installer la lib dotenv
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

### 📌 Dépendance

- PHP : 8.2 <br>
- Symfony : 6.2 <br>
