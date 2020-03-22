#!/bin/bash -e
vendor/bin/phpmd "./src, ./bin, ./tests" text ./.php_md.rules.xml
