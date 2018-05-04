version: '3'
services:
  db:
    image: mysql
    container_name: {project}-mysql
    volumes:
     - /var/lib/mysql/
    environment:
      MYSQL_ALLOW_EMPTY_PASSWORD: "yes"
    restart: "no"
  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    container_name: {project}-phpmyadmin
    ports:
     - 8080:80
    restart: "no"