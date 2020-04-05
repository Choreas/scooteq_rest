[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/f39a77a339df981e1a89)

[API documentation](https://documenter.getpostman.com/view/10927287/SzYZ2KQo "API documentation (Postman)")

## Introduction
To make things more interesting while learning how to work with rest apis, this a simple rest backend
you can alter however you like. I tried to stuff it into a container so nobody needs to have
a database or other dependencies installed and running. I hope it works as expected on every machine.

The container has proved to run on systems lacking even php, so you should be fine without it.

## Steps - First Start
You have to install docker and in case you use linux you might need to install
docker-compose, but it comes bundled with the windows 10 version of docker.
NOTE: On linux there will be files created which you cannot delete without root access.
1. **Get [docker](https://hub.docker.com/editions/community/docker-ce-desktop-windows "Docker for Win 10 Pro").**
    - For Windows: Don't enable the "use windows containers" setting during installation.
    - Only on linux: Get docker-compose (it comes bundled with the windows 10 version of docker)
    - If you are using Windows, but not Windows 10 Professional, you will need [docker toolbox](https://github.com/docker/toolbox "docker toolbox") instead.
2. **Clone** this repository to your computer and **bring up the docker container**.
    - Find "Start.bat" and run it.
3. **Wait** for the operations to complete. *{1 to 5 minutes}*
    - This will only happen at this first start.
    - Make sure composer has finished and exited before proceeding.
4. **Stop the program.**
    - Try ctrl+c or simply close the console window.
5. **Bring it up again.**
    - Run Start.bat again.
    - You must not close the console window, you will shut down all services by closing it.
6. **Migrate the database.** *{1 to 3 minutes}*
    - run openme/migrateDatabase.bat.
    - This will take its time and you should see quite some messages about tables and seeds.
        - ***If you get an exception** instead, telling you the database doesn't exist, follow these steps.*
        - *Access the database server (e.g. from HeidiSQL) using the information from the table below.*
        - *Create a database called "scooteq" on the server.*
        - *Run migrateDatabase.bat again.*

**Finished!** All subsequent starts are simply performed by running Start.bat.
For any problems, please look inside the openme/ folder or feel free to ask on github.

## Details
It should be up and running now. This table shows you where the services are
reachable from your host machine:

| Service              | Access (from host)  |  Credentials   |
| -------------------- |---------------------|----------------|
| Webapp               | localhost:8000      |                |
| API Server           | localhost:8000/api  |                |
| Database Server      | localhost:3306      | root / no pass |

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
