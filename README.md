# shippingchallange-Ubuntu18.04 and Debian9.6.0

Step 1 — Installing Docker:  
go to the official website from docker and follow the installation guide
- https://docs.docker.com/install/linux/docker-ce/ubuntu/#set-up-the-repository

for dabian go to
- https://docs.docker.com/install/linux/docker-ce/debian/#set-up-the-repository

Step 2 — Cloning the project:  
    go to the directory where you want to store your project. the git clone will arrive in 1 map.  
- $ - git clone https://github.com/mnmpower/shippingchallange-Ubuntu18.04.git  
- $ - cd shippingchallange-Ubuntu18.04  
- /shippingchallange-Ubuntu18.04$ - sudo docker-compose up -d  

Step 3 — Testing if all images are downloaded  
- $ - sudo docker images  

you should have 5 diffrent repository's:  
   - shippingchallange-ubuntu1804_www
   - mysql
   - portainer/portainer
   - phpmyadmin/phpmyadmin
   - php

Step 4 — Testing if all containers are running  
- $ - sudo docker ps -a

you should have 4 running containers:
   - shippingchallange-ubuntu1804_www
   - phpmyadmin/phpmyadmin
   - mysql:5.7
   - portainer/portainer

Step 5 — Using the browser  
Open your brower and go to
   - your.ip.add.ress:8001 to vieuw the Webpages.
   - your.ip.add.ress:8002 to vieuw the PhpMyAdmin.
   - your.ip.add.ress:9000 to vieuw portainer.

  Logins:  
- PhpMyAdmin:  
user: maarten  
pass: R1234-56  
- portainer  
user: maarten  
pass: R1234-56  
