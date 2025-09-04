<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós.</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Sobre Nós')
    @section('content')
        <style>
            .sobre-nos-card {
                max-width: 700px;
                margin: 48px auto;
                background: linear-gradient(135deg, #f0f4ff 0%, #e0e7ff 100%);
                border-radius: 18px;
                box-shadow: 0 8px 32px rgba(60,72,88,0.18);
                padding: 48px 40px;
                font-family: 'Segoe UI', Arial, sans-serif;
                transition: box-shadow 0.2s;
            }
            .sobre-nos-card:hover {
                box-shadow: 0 12px 40px rgba(60,72,88,0.28);
            }
            .sobre-nos-title {
                color: #6366f1;
                font-size: 2.7rem;
                font-weight: 800;
                margin-bottom: 28px;
                text-align:center;
                letter-spacing: 1px;
            }
            .sobre-nos-text {
                font-size: 1.25rem;
                color: #374151;
                line-height: 1.85;
                text-align:center;
                margin-bottom: 0;
            }
        </style>
        <div class="sobre-nos-card">
            <h1 class="sobre-nos-title">Sobre Nós</h1>
            <p class="sobre-nos-text">
                As principais características que temos a falar sobre nós é a lealdade à empresa na qual trabalhamos e a nossa amizade, mais de 10 anos de dedicação e perseverança. Onde batalhamos e iremos continuar até adquirir o conhecimento e prestígio nos quatro cantos do mundo!
            </p>
        </div>
    @endsection
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>