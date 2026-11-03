# URLZ API

<p align="center">
  <a href="https://urlz.li/">
    <img src="https://urlz.li/assets/img/urlz-app-icon.png" width="112" alt="URLZ logo">
  </a>
</p>

<p align="center">
  <strong>Create secure, trackable and monetized short links for URLs, files and photos.</strong>
</p>

<p align="center">
  <a href="https://urlz.li/doc/">Documentation</a> ·
  <a href="https://urlz.li/signup/">Create an account</a> ·
  <a href="https://urlz.li/dashboard/">Dashboard</a> ·
  <a href="https://urlz.li/contact/">Support</a>
</p>

[![OpenAPI 3.0](https://img.shields.io/badge/OpenAPI-3.0-6BA539?logo=openapiinitiative&logoColor=white)](https://urlz.li/openapi.json)
[![API version](https://img.shields.io/badge/API-2.1.0-5b5bd6)](https://urlz.li/doc/)
[![HTTPS](https://img.shields.io/badge/HTTPS-required-success)](https://api.urlz.li/)
[![Postman](https://img.shields.io/badge/Postman-collection-FF6C37?logo=postman&logoColor=white)](https://urlz.li/urlz-postman-collection.json)

URLZ is a developer-friendly platform for turning URLs, files and photos into compact links that are easy to share and manage. Beyond shortening, URLZ supports click analytics, password protection, paid access, conversations attached to a link with **URLZ Chat**, and document collection with **URLZ Request**.

## What you can build

- Shorten long URLs and manage links with an API key.
- Upload files and photos and receive a shareable short URL.
- Protect content with a password.
- Track clicks and link activity.
- Create paid-access links for private content.
- Add a private conversation to a link with URLZ Chat.
- Request and collect documents with URLZ Request.
- Integrate URLZ into web, mobile, SaaS and automation workflows.

## Quick start

### 1. Create an account

[Create a URLZ account](https://urlz.li/signup/), then open the [dashboard](https://urlz.li/dashboard/) to obtain your API key.

### 2. Create a short link

```bash
curl --request POST \
  --url 'https://api.urlz.li/url/create?apikey=YOUR_API_KEY' \
  --header 'Content-Type: application/x-www-form-urlencoded' \
  --data-urlencode 'apikey=YOUR_API_KEY' \
  --data-urlencode 'fullUrl=https://example.com/private-report'
```

Example response:

```json
{
  "result": {
    "short_url": "https://urlz.li/7b3c2e5a",
    "hash": "7b3c2e5a",
    "date": "2026-11-03",
    "time": "14:32:10"
  }
}
```

Never commit a real API key. Use an environment variable or a secret manager in production.

## Official resources

| Resource | URL |
| --- | --- |
| Developer documentation | <https://urlz.li/doc/> |
| OpenAPI specification | <https://urlz.li/openapi.json> |
| Postman collection | <https://urlz.li/urlz-postman-collection.json> |
| APIs.json discovery document | <https://urlz.li/.well-known/apis.json> |
| AI-readable overview | <https://urlz.li/llms.txt> |
| Service status and support | <https://urlz.li/contact/> |

The files in this repository mirror the official public resources so developers can inspect, version and import them easily.

## Examples

Ready-to-run examples are available in [`examples/`](examples/):

- [cURL](examples/create-short-link.sh)
- [JavaScript](examples/javascript/create-short-link.mjs)
- [Python](examples/python/create_short_link.py)
- [PHP](examples/php/create-short-link.php)

## API areas

| Area | Capabilities |
| --- | --- |
| Short links | Create, list and delete links |
| Uploads | Upload files and photos |
| Analytics | Read click history and performance |
| Security | Password-protected access |
| Monetization | Create paid links and track transactions |
| URLZ Chat | Enable and list conversations attached to links |
| URLZ Request | Collect requested documents and track completion |

See the [API reference](docs/api-reference.md) or import [`openapi.json`](openapi.json) into your preferred API client.

## Repository structure

```text
.
├── docs/                         Developer guides
├── examples/                     Integration examples
├── openapi.json                  OpenAPI 3.0 specification
├── urlz-postman-collection.json  Postman collection
├── CONTRIBUTING.md               Contribution guide
├── SECURITY.md                   Vulnerability reporting policy
└── SUPPORT.md                    Support channels
```

## Support and security

- General help: [URLZ support](https://urlz.li/contact/)
- Documentation: [urlz.li/doc](https://urlz.li/doc/)
- Security issues: follow [`SECURITY.md`](SECURITY.md) and do not publish vulnerability details in a public issue.

## Licence

The documentation and example code in this repository are provided under the [MIT License](LICENSE). Use of the hosted URLZ service and API remains subject to the [URLZ Terms of Service](https://urlz.li/terms-and-conditions-of-sale/) and [Privacy Policy](https://urlz.li/privacy-policy/).

