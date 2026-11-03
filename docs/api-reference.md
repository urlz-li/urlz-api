# API reference

The canonical machine-readable reference is [`openapi.json`](../openapi.json). The hosted copy is available at <https://urlz.li/openapi.json>.

## Base URL

```text
https://api.urlz.li
```

## Endpoint groups

| Method | Path | Purpose |
| --- | --- | --- |
| `POST` | `/url/create` | Create a short link with an API key |
| `GET` | `/url/list` | List and filter API-key links |
| `POST` | `/mobile/v1/auth/login.php` | Open an account session |
| `POST` | `/mobile/v1/shorten.php` | Create an account-linked short link |
| `POST` | `/mobile/v1/upload.php` | Upload a file or photo |
| `GET` | `/mobile/v1/links.php` | List account links |
| `GET` | `/mobile/v1/clicks.php` | Read click analytics |
| `DELETE` | `/mobile/v1/delete-link.php` | Delete an owned link |
| `POST` | `/mobile/v1/collaboration/configure.php` | Enable URLZ Chat or URLZ Request |
| `GET` | `/mobile/v1/collaboration/chats.php` | List link conversations |
| `GET` | `/mobile/v1/collaboration/requests.php` | Track document requests |
| `GET` | `/mobile/v1/monetization/links.php` | List paid links |
| `POST` | `/mobile/v1/monetization/links.php` | Create or convert a paid link |
| `POST` | `/mobile/v1/monetization/upload.php` | Create a paid file or photo |
| `GET` | `/mobile/v1/monetization/transactions.php` | List paid-link sales |

Use the OpenAPI file for complete request schemas, validation rules, authentication requirements and response definitions.

