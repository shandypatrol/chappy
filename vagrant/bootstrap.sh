#!/bin/bash

# Clear working directory.
rm -rf *

### PHP install #####

## Prerequisites

apt-get install libxml2-dev

# Fetch it

if ! [ -e /usr/bin/php]
    then

        echo "Installing PHP..."

        ! [ -d php-install ] && mkdir php-install
        cd php-install

        PHP_INSTALL_DIR="/var/lib/php7b2"
        PHP_VERSION="php-7.0.0beta2"
        PHP_TAR="$PHP_VERSION.tar.xz"
        PHP_DL_BASE="https://downloads.php.net/~ab/"
        PHP_DL_TAR="$PHP_DL_BASE$PHP_TAR"

        mkdir $PHP_INSTALL_DIR

        if ! [ -f $PHP_TAR ]
            then
                wget $PHP_DL_TAR
        else
            echo "Skipping download."
        fi

        tar -xf $PHP_TAR

        [ -d $PHP_INSTALL_DIR ] && rm -rf $PHP_INSTALL_DIR

        ./$PHP_VERSION/configure --prefix=$PHP_INSTALL_DIR
        make
        make install

        ln /var/lib/php7b2/bin/php /usr/bin/php

else

    echo "PHP installed. Skipping installation."

fi