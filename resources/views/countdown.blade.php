<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
    <link rel="stylesheet" href="{{ asset('css/coutdown.css') }}">
</head>
<body>
    <div class="countdown-container">
        @if ($countdown['years'] > 0)
            <div class="countdown-unit">
                <span>{{ $countdown['years'] }}</span>
                <div>Yıl</div>
            </div>
        @endif
        @if ($countdown['months'] > 0)
            <div class="countdown-unit">
                <span>{{ $countdown['months'] }}</span>
                <div>Ay</div>
            </div>
        @endif
        @if ($countdown['days'] > 0)
            <div class="countdown-unit">
                <span>{{ $countdown['days'] }}</span>
                <div>Gün</div>
            </div>
        @endif
        @if ($countdown['hours'] > 0)
            <div class="countdown-unit">
                <span>{{ $countdown['hours'] }}</span>
                <div>Saat</div>
            </div>
        @endif
        @if ($countdown['minutes'] > 0)
            <div class="countdown-unit">
                <span>{{ $countdown['minutes'] }}</span>
                <div>Dakika</div>
            </div>
        @endif
    </div>
</body>
</html>
