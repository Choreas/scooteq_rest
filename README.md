[API documentation](https://documenter.getpostman.com/view/10927287/SzYZ2KQo "API documentation (Postman)")
[Postman Collection](https://www.getpostman.com/collections/f39a77a339df981e1a89 "Import this into postman")

To make things more interesting while learning how to work with rest apis, this a simple rest backend
you can alter however you like. I tried to stuff it into a container so nobody needs to have
a database or other dependencies installed and running. I hope it works as expected on every machine.

You shouldn't need anything besides docker installed. My environment has php installed, but in case
I did it right it should come with the container.

You have to install docker though and in case you use linux you might need to install
docker-compose, but it comes bundled with the windows 10 version of docker.
NOTE: On linux there will be files created which you cannot delete without root access.

1. Go to root directory (where docker-compose.yml is located) and issue the following
command: docker-compose up
2. It will partly fail at first. This is expected, now wait until composer has
installed everything
3. Press ctrl+c and wait until services stopped
4. Again: docker-compose up
5. You can run migrateDatabase.bat to migrate all tables into the scooteq db.
   This can be repeated whenever table migrations have been changed.
   NOTE: if you get duplicate key errors, run it again. This could happen once in a while^^
   
It should be up and running now. You can access the webapp at localhost:8000
from your host machine.
You can access the api at localhost:8000/api/ from your host machine
You can access the database at localhost:3306 from your host machine

This environment uses laravel, it has a pretty good documentation. Building a
rest api backend with it is easy once you got the hang of it. But you can just use this container to 
play with the existing api (e.g. using postman). 
Martin should be able to tell you pretty much anything about laravel btw ;)

Please see the api documentation in openme folder for details about available parameters
and check the database diagram for information about the database entities.
If there are problems, see if the openme folder can help you solving them.
