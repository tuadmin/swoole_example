#!/bin/bash
sudo su
apt-get update
pecl install openswoole
echo "extension=openswoole.so" >> "/usr/local/etc/php/conf.d/swoole.ini"
composer require --dev swoole/ide-helper:@dev