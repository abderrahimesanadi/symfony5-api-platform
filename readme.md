Pour demarrer l'application il suffit d'avoir docker et docker-compose installé sur votre machine et lancer la commande ci dessous à la racine du projet:

docker-compose up -d 

apres pourdes probles de timing j'ai pas pu automatiser certains taches pour cela il faut ajouter ces commandes pour que l'application marche bien :

sudo docker exec -it www_docker_symfony bash

composer install

chown -R www-data:www-data var/

apres pour  tester il suffit de visiter cette url: 

http://127.0.0.1:8082/api/











