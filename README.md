IN PHP CODE FOLDER
docker build -t dynamicqrcodes .
docker tag dynamicqrcodes alecrobingould/dynamicqrcodes:latest  
docker push alecrobingould/dynamicqrcodes:latest

IN DB CODE FOLDER
docker build -t dynamicqrcodesdb .
docker tag dynamicqrcodesdb alecrobingould/dynamicqrcodesdb:latest
docker push alecrobingould/dynamicqrcodesdb:latest

*This is a script that allows the generation and saving of dynamic and static QR codes.