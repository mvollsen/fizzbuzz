#!/bin/bash -e
vendor/bin/php-cs-fixer fix --config=".php_cs" --diff --using-cache=no --verbose --show-progress=estimating ./
