# Authentication

URLZ exposes two authentication models, depending on the endpoint family.

## API key authentication

The public API-key endpoints use the `apikey` parameter. Create and manage the key from your URLZ dashboard.

```text
https://api.urlz.li/url/create?apikey=YOUR_API_KEY
```

For compatibility, the create endpoint also accepts the API key in the form body as described by the OpenAPI specification.

## Account session authentication

Account-linked mobile endpoints use an opaque bearer session token returned by the login endpoint.

```http
Authorization: Bearer YOUR_SESSION_TOKEN
```

Session tokens must be kept private and transmitted only over HTTPS.

## Security recommendations

- Keep keys and tokens on the server whenever possible.
- Use environment variables or a dedicated secret manager.
- Never include credentials in screenshots, support tickets or public issues.
- Rotate compromised credentials immediately from the URLZ account interface.
- Validate destinations and uploaded content before submitting them.

