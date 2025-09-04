@extends('layouts.app')
@section('title', 'Contato')
@section('content')
    <div style="max-width: 500px; margin: 40px auto; background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); border-radius: 16px; box-shadow: 0 4px 24px rgba(60,72,88,0.12); padding: 40px 32px; font-family: 'Segoe UI', Arial, sans-serif;">
        <h1 style="color: #3b82f6; font-size: 2.2rem; font-weight: 700; margin-bottom: 24px; text-align:center;">Contato</h1>
        <form method="POST" action="/contato" style="display: flex; flex-direction: column; gap: 18px;">
            @csrf
            <div>
                <label style="font-weight: 600; color: #374151;">Nome:</label>
                <input type="text" name="nome" required style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #cbd5e1; margin-top: 4px;">
            </div>
            <div>
                <label style="font-weight: 600; color: #374151;">E-mail:</label>
                <input type="email" name="email" required style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #cbd5e1; margin-top: 4px;">
            </div>
            <div>
                <label style="font-weight: 600; color: #374151;">Telefone:</label>
                <input type="text" name="telefone" required style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #cbd5e1; margin-top: 4px;">
            </div>
            <button type="submit" style="background: #3b82f6; color: #fff; font-weight: 600; padding: 10px 0; border: none; border-radius: 6px; font-size: 1.1rem; cursor: pointer; transition: background 0.2s;">Enviar</button>
        </form>
    </div>
@endsection
