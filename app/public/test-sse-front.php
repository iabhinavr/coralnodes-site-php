<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SSE Test</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    #output {
      border: 1px solid #ddd;
      padding: 10px;
      max-height: 300px;
      overflow-y: auto;
      white-space: pre-wrap; /* Preserve line breaks */
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <h1>Server-Sent Events (SSE) Test</h1>
  <div>
    <strong>Status:</strong> <span id="status">Connecting...</span>
  </div>
  <div id="output"></div>

  <script>

    const params = {
      test_key: "66bb2b7c841156002b8f13aaea03e9c5",
      test_locations: ["london", "saopaulo"],
      test_date: "2025-01-12 21:25:43",
      test_url: "https://www.coralnodes.com"
    }

    const queryString = "test_key=66bb2b7c841156002b8f13aaea03e9c5&test_date=2025-01-12 21:25:43&test_locations[]=london&test_locations[]=saopaulo&test_url=https://www.coralnodes.com";

    const eventSource = new EventSource(`http://coralnodes.local/tools/ttfb-test-stream/?${queryString}`);

    const statusEl = document.getElementById("status");
    const outputEl = document.getElementById("output");

    eventSource.onopen = function () {
      statusEl.textContent = "Connected";
    };

    eventSource.onmessage = function (event) {
      const data = event.data || "No data received";
      outputEl.textContent += `${data}\n`;
      outputEl.scrollTop = outputEl.scrollHeight; // Auto-scroll to the bottom
    };

    eventSource.onerror = function () {
      statusEl.textContent = "Error (connection lost or failed)";
      statusEl.classList.add("error");
    };

    eventSource.addEventListener('myreply', function(event) {
      const data = event.data || "No data received";
      outputEl.textContent += `${data}\n`;
      outputEl.scrollTop = outputEl.scrollHeight;
    });

    eventSource.addEventListener('[end]', function(event) {
      const data = event.data || "No data received";
      outputEl.textContent += `${data}\n`;
      outputEl.scrollTop = outputEl.scrollHeight;
      eventSource.close();
      statusEl.textContent = "Disconnected (manually closed)";
    });

  </script>
</body>
</html>
