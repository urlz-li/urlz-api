#!/usr/bin/env sh
set -eu

: "${URLZ_API_KEY:?Set URLZ_API_KEY before running this example}"

curl --request POST \
  --url "https://api.urlz.li/url/create?apikey=${URLZ_API_KEY}" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --data-urlencode "apikey=${URLZ_API_KEY}" \
  --data-urlencode "fullUrl=https://example.com/private-report"

