# MVC interfaces pack
### build and up all containers
```
cd docker
docker-compose up -d
```
### installation
###### go into PHP container
```
cd docker
docker exec -it mvc-interfaces-php sh
```
###### run composer
```
composer install
```
### hotkeys
###### up all containers and get into php container
```
./up.sh
```
###### down all containers
```
./down.sh
```
### creating SSH connection to docker PHP container
* go to File | Settings | Tools | SSH Configurations
* add new connection with parameters
  * host     : 10.10.4.2 (set in docker/docker-compose.yml file)
  * port     : 22
  * user     : root
  * password : root
### adding PHP CLI interpreter
* go to File | Settings | PHP
* CLI Interpreters -> add new with parameters
  * SSH configuration: set added before
  * PHP executable: /usr/local/bin/php
    (can be known by running "which php" in command line inside PHP container)
* Path mapping -> add new with parameters
  * Local path  : PHPStorm project root
  * Remote path : /var/www/html