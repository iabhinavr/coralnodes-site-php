<?php
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
header("Connection: keep-alive");

// Disable output buffering
ini_set('output_buffering', 'off');
ini_set('zlib.output_compression', 'off');
ini_set('implicit_flush', 'on');
ob_implicit_flush(true);

// Clear any existing buffers
while (ob_get_level() > 0) {
    ob_end_flush();
}

echo "retry: 1000\n"; // Reconnection time in milliseconds
echo "\n"; // Initial padding

for ($i = 0; $i < 5; $i++) {
    echo "event: myreply\n";
    echo "data: Hello $i\n\n";
    ob_flush();
    flush();
    sleep(1);
}

// Send a final message before closing
echo "event: [end]\n";
echo "data: Goodbye!\n\n";
ob_flush();
flush();

exit;
