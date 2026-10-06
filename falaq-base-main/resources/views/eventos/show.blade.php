@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <a href="{{ route('eventos.index') }}" class="text-blue-600 hover:underline mb-4 inline-block">&larr; Voltar para Eventos</a>
    
    <div class="bg-white rounded-lg shadow-md p-6 mb-8 border border-gray-200">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $evento->titulo }}</h1>
        <p class="text-gray-600 mb-4">{{ $evento->descricao }}</p>
        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2.5 py-0.5 rounded font-semibold">
            Código: {{ $evento->codigo_acesso }}
        </span>
    </div>

    <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Faça sua Pergunta</h2>
        <form action="{{ route('perguntas.store', $evento) }}" method="POST" class="bg-white p-4 rounded-lg shadow border border-gray-200">
            @csrf
            <div class="mb-3">
                <textarea 
                    name="conteudo" 
                    rows="3" 
                    class="w-full rounded-md shadow-sm p-2 border focus:outline-none focus:ring-2 focus:ring-blue-500 @error('conteudo') border-red-500 @else border-gray-300 @enderror" 
                    placeholder="Escreva sua pergunta para o palestrante..."
                >{{ old('conteudo') }}</textarea>
                
                @error('conteudo')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>
            
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-150">
                Enviar Pergunta
            </button>
        </form>
    </div>

    <div>
        <h2 class="text-xl font-bold text-gray-800 mb-4">Perguntas da Plateia</h2>
        @forelse($perguntas as$pergunta)
            <div class="bg-white p-4 rounded-lg shadow mb-4 border border-gray-100">
                <p class="text-gray-800 text-lg mb-2">{{ $pergunta->conteudo }}</p>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span>En