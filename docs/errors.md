# Errors and troubleshooting

URLZ uses standard HTTP status codes together with JSON error messages.

| Status | Meaning | Recommended action |
| --- | --- | --- |
| `400` | Invalid or missing input | Validate the request body and required fields |
| `401` | Missing or invalid session | Sign in again and refresh the bearer token |
| `403` | API key, subscription or permission rejected | Check account status, key and feature access |
| `404` | Link or resource not found | Verify the hash or identifier |
| `429` | Request limit reached | Retry later with exponential backoff |
| `5xx` | Temporary service problem | Retry safely, then contact support if persistent |

Do not retry invalid requests continuously. Log the status code and non-sensitive error message, but never log API keys, passwords or bearer tokens.

