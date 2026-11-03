import os

import requests


api_key = os.environ["URLZ_API_KEY"]
endpoint = "https://api.urlz.li/url/create"

response = requests.post(
    endpoint,
    params={"apikey": api_key},
    data={
        "apikey": api_key,
        "fullUrl": "https://example.com/private-report",
    },
    timeout=30,
)
response.raise_for_status()

print(response.json())

