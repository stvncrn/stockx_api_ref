#!/bin/bash

rm -rf src-gen
mkdir src-gen

java -jar bin/swagger-codegen-cli.jar generate -c config/config.java.json -i swagger.json -l java -o src-gen/java
#java -jar bin/swagger-codegen-cli.jar generate -i swagger.json -l php -o src-gen/php
#java -jar bin/swagger-codegen-cli.jar generate -i swagger.json -l nodejs-server -o src-gen/nodejs



