#!/bin/bash

set -e
# set -x

BASEDIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." &>/dev/null && pwd)"

echo ""
echo "------------------------------------------"
echo "Generate DR PHP client ..."
echo "------------------------------------------"
echo ""

# remove generated files
rm -rf docs
rm -rf lib

# generate 
docker run --rm -v $BASEDIR:/local openapitools/openapi-generator-cli \
  generate \
  -i "https://www.digitalriver.com/docs/digital-river-api-reference/2021-12-13.json" \
  -g php \
  -p artifactVersion=2023 \
  -p invokerPackage=DigitalRiver\\ApiSdk \
  -p packageName=DigitalRiver \
  -o /local

echo ""
echo "------------------------------------------"
echo "Generate DR PHP client ... Done!" 
echo "------------------------------------------"
echo "" 
