const apiKey = process.env.URLZ_API_KEY;

if (!apiKey) {
  throw new Error("Set URLZ_API_KEY before running this example.");
}

const body = new URLSearchParams({
  apikey: apiKey,
  fullUrl: "https://example.com/private-report",
});

const endpoint = new URL("https://api.urlz.li/url/create");
endpoint.searchParams.set("apikey", apiKey);

const response = await fetch(endpoint, {
  method: "POST",
  headers: { "Content-Type": "application/x-www-form-urlencoded" },
  body,
});

const payload = await response.json();

if (!response.ok) {
  throw new Error(`URLZ request failed (${response.status}): ${JSON.stringify(payload)}`);
}

console.log(payload);

