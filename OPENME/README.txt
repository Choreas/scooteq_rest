You shouldn't need anything installed. My environment has php installed, but in case
I did it right it should come with the container.

You have to install docker though and in case you use linux you might need to install
docker-compose, but it comes bundled with the windows 10 version of docker.

1. Go to root directory (where docker-compose.yml is located) and issue following
command: docker-compose up
2. It will partly fail at first. This is expected, now wait until composer has
installed everything
3. Press ctrl+c and wait until services stopped
4. Again: docker-compose up
5. You can run migrateDatabase.bat to migrate all tables into the scooteq db.
   This can be repeated whenever table migration have been changed.
   
It should be up and running now. You can access the webapp at localhost:8000
from your host machine.
You can access the api at localhost:8000/api/ from your host machine
You can access the database at localhost:3306 from your host machine

This environment uses laravel, it has a pretty good documentation. Building an
rest api backend is easy and fun. But you can just use this container to test
the existing api using postman or whatever you like. 
Martin should be able to tell you pretty much anything about laravel btw ;)

-Nik