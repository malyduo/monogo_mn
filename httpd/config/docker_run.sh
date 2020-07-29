#!/bin/sh
usermod -u "$(stat -c "%u" /var/www/html)" http_user;
groupmod -g "$(stat -c "%g" /var/www/html)" http_user;
echo "\n* Almost ! Starting web server now\n";
exec apache2-foreground