@extends('layouts.app')
@section('title', 'Dados Recebidos')
@section('content')
    <div style="max-width: 500px; margin: 40px auto; background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); border-radius: 16px; box-shadow: 0 4px 24px rgba(60,72,88,0.12); padding: 40px 32px; font-family: 'Segoe UI', Arial, sans-serif;">
        <h1 style="color: #3b82f6; font-size: 2.2rem; font-weight: 700; margin-bottom: 24px; text-align:center;">Dados Recebidos</h1>
        <div style="font-size: 1.1rem; color: #374151; line-height: 1.7;">
            <p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
            <p><strong>E-mail:</strong> {{ $dados['email'] }}</p>
            <p><strong>Telefone:</strong> {{ $dados['telefone'] }}</p>
        </div>
    </div>
@endsection
