<!DOCTYPE html>
<html>
<head>
    <title>Database Query Logs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .log-entry {
            border-bottom: 1px solid #ddd;
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Database Query Logs</h1>
    <div>
        @forelse($logs as $log)
            <div class="log-entry">{{ $log }}</div>
        @empty
            <p>No logs found.</p>
        @endforelse
    </div>
</body>
</html>
