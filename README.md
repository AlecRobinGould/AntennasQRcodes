# This is a codebase that allows the generation and saving of dynamic and static QR codes.

## For use with Docker:
See docker.yaml
Run:
* docker compose build --no-cache 
* docker compose up -d

(Update) IN PHP CODE FOLDER
docker build -t dynamicqrcodes .
docker tag dynamicqrcodes alecrobingould/dynamicqrcodes:latest  
docker push alecrobingould/dynamicqrcodes:latest

(Update) IN DB CODE FOLDER
docker build -t dynamicqrcodesdb .
docker tag dynamicqrcodesdb alecrobingould/dynamicqrcodesdb:latest
docker push alecrobingould/dynamicqrcodesdb:latest

## For use without docker:
See [wiki](https://github.com/AlecRobinGould/AntennasQRcodes/wiki) setup.
