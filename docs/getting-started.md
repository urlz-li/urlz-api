# Getting started

This guide takes you from a new URLZ account to your first API-created short link.

## Requirements

- An active URLZ account.
- An API key from the URLZ dashboard.
- An HTTPS-capable HTTP client.

## Create your account and API key

1. Create an account at <https://urlz.li/signup/>.
2. Sign in and open <https://urlz.li/dashboard/>.
3. Copy your API key from the account or API section.
4. Store the key as a secret; never expose it in client-side code or a public repository.

## Make your first request

```bash
export URLZ_API_KEY="your_api_key"

curl --request POST \
  --url "https://api.urlz.li/url/create?apikey=${URLZ_API_KEY}" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --data-urlencode "apikey=${URLZ_API_KEY}" \
  --data-urlencode "fullUrl=https://example.com"
```

On success, the response contains a short URL and its hash. The hash is the short identifier only, without the `https://urlz.li/` prefix.

## Next steps

- Import [`openapi.json`](../openapi.json) into an OpenAPI-compatible client.
- Import [`urlz-postman-collection.json`](../urlz-postman-collection.json) into Postman.
- Explore authentication and account-linked endpoints in [Authentication](authentication.md).
- Review all capabilities in [Features](features.md).

