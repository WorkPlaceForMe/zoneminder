ZoneMinder
==========


Run command
sudo DOCKER_REPO=iconzm/packpack OS=ubuntu DIST=bionic utils/packpack/startpackpack.sh

It will generate a build folder it will generate "zoneminder-dbg_1.34.26~20211225.0-bionic_all.deb" folder 

Rename this folder to "zoneminder.deb"

Then paste it inside "test-zoneminder" folder in the server

RUN docker-compose up --build -d