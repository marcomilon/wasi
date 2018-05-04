#!/bin/bash

image=$1

if [ -z $image ]
then
  echo "Project name is missing"
  echo "Usage: $0 <project-name>"
  exit
fi

sed "s/{project}/${image}/g" docker-compose.tpl > docker-compose.yml
sed "s/{project}/${image}/g" serve-php.tpl > serve.sh

echo "Add the folowing line to your host file: /etc/host"
echo "127.0.0.1 www.${image}.com"