<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <h3>Status Modul Feeder</h3>
    <p>Modul Feeder saat ini: {{ $isFeederModuleActive ? 'Aktif' : 'Non-Aktif' }}</p>

    <form action="{{ route('dashboard.toggleFeeder') }}" method="POST">
        @csrf
        <button type="submit">
            {{ $isFeederModuleActive ? 'Non-Aktifkan' : 'Aktifkan' }} Modul Feeder
        </button>
    </form>
</body>
</html>
