<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ App\Models\SiteSettings::where('setting_key', 'site_name')->value('setting_value') ?? 'LPM - Lembaga Penjaminan Mutu' }}</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="mini icon" href="{{ App\Models\SiteSettings::where('setting_key', 'logo_url')->value('setting_value') ? asset('storage/' . App\Models\SiteSettings::where('setting_key', 'logo_url')->value('setting_value')) : asset('logo_uca.png') }}">
    <link rel="stylesheet" href="{{ asset('css/web/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <x-common.navbar />

    @stack('styles')

    {{ $slot }}

    <x-common.footer />
</body>
</html>