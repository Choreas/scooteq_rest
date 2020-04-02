[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/f39a77a339df981e1a89)

[API documentation](https://documenter.getpostman.com/view/10927287/SzYZ2KQo "API documentation (Postman)")

## Introduction
To make things more interesting while learning how to work with rest apis, this a simple rest backend
you can alter however you like. I tried to stuff it into a container so nobody needs to have
a database or other dependencies installed and running. I hope it works as expected on every machine.

You shouldn't need anything besides docker installed. My environment has php installed, but in case
I did it right it should come with the container.

## Steps
You have to install docker and in case you use linux you might need to install
docker-compose, but it comes bundled with the windows 10 version of docker.
NOTE: On linux there will be files created which you cannot delete without root access.

1. Go to root directory (where docker-compose.yml is located) and issue the following
command: docker-compose up
2. It will partly fail at first. This is expected, now wait until composer has
installed everything
3. Press ctrl+c and wait until services stopped
4. Again: docker-compose up
5. You can run openme/migrateDatabase.bat to migrate all tables into the scooteq db.
   (May take up to two minutes)
   This can be repeated whenever table migrations have been changed.

## Details
It should be up and running now. This table shows you where the services are
reachable from your host machine:

| Service       | Access (from Host)  |  Credentials   |
| ------------- |---------------------|----------------|
| Webapp        | localhost:8000      |                |
| API           | localhost:8000/api  |                |
| Database      | localhost:3306      | root / no pass 

### Database Diagram
<a href="OPENME/ERD_31032020.PNG"><img src="https://github.com/Choreas/scooteq_rest/blob/master/OPENME/ERD_31032020.PNG" align="center" height="150" width="150" ></a>

### API
The API is well documented via postman. Follow this [link](https://documenter.getpostman.com/view/10927287/SzYZ2KQo "API documentation")
to see the documentation and click "Run in Postman" to import the entire collection of requests.

### Environment
This environment uses laravel, it has a pretty good documentation. Building a
rest api backend with it is easy once you got the hang of it. But you can just use this container to 
play with the existing api (e.g. using postman). 
Martin should be able to tell you pretty much anything about laravel btw ;)

## Intentions & Contributions
The API is intended as a base for our first steps regarding REST-APIs. This means that it can and should be changed in any way you think
it could be improved. It could be a starting point for a simple client you write using python.
Please make sure you document any changes to the API and the database structure before merging.

## Help with issues
If there are problems, see if the openme folder can help you solving them. Feel free to create issues or asking me otherwise.
