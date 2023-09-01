#!/bin/bash

set -e
# set -x

BASEDIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." &>/dev/null && pwd)"

echo ""
echo "------------------------------------------"
echo "Fetch 2012-12-13 ..."
echo "------------------------------------------"
echo ""

# 
curl https://www.digitalriver.com/docs/digital-river-api-reference/2021-12-13.json --output $BASEDIR/api/2021-12-13.json

sed -i 's/"If you have a commerce technology in place.*$/"removed by liao, too long",/' "$BASEDIR/api/2021-12-13.json"
npx --yes prettier --write "$BASEDIR/api/2021-12-13.json"

echo ""
echo "Download completed. Please check use 'git diff' to check the difference".
echo ""
