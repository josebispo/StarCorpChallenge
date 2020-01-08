#!/bin/bash

echo "INSTALL COMPOSER";
composer install;

echo "Run Tests"
vendor/bin/phpunit tests/MultipleTest

echo "Choose a port to run the application, follows by [enter]:"
read port
{
	php -S 127.0.0.1:${port}
} || {
	echo "Please, verify if this port is being used, or read how run without script in Readme.md "
}

