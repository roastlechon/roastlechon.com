# roastlechon.com

Source code for roastlechon.com

## Deploying using docker
Build docker image by first cloning repo.

* `git clone https://roastlechon@bitbucket.org/roastlechon/roastlechon.com.git`
* `sudo docker build -t roastlechon.com .`

After building the image, run the image and link to hipache instance.

* `sudo docker run -p 80 -p 443 -d roastlechon.com /sbin/my_init --enable-insecure-key`
* Use `sudo docker ps -a` to retrieve the ports for the application.
* Login to the hipache redis instance and create a frontend:
    * `redis-cli`
    * `rpush frontend:roastlechon.com roastlechon http://{dockergateway}:{port}`

Changes should be made instantly.