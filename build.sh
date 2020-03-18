#!/bin/sh

php -f ./generate_json.php > states.json

sed '/---/q' README.md > README.tmp
php -f ./generate_md.php >> README.tmp

rm README.md
mv README.tmp README.md