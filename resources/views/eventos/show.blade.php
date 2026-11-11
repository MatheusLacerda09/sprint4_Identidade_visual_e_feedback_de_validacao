@extends('layouts.app')

<<<<<<< HEAD
@section('title', $evento->titulo . ' — FalaQ')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">

    <!-- Formulário de envio de Pergunta (TICKET #007 e #008) -->
    <div class="md:col-span-5">
        <div class="bg-gray-900 border border-gray-700 rounded-xl shadow-md p-6">
            <h4 class="text-xl font-bold mb-4">💬 Faça sua Pergunta</h4>

            <form action="{{ route('eventos.perguntas.store', $evento->id) }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="texto" class="block text-sm text-gray-400 mb-1">Texto da Pergunta</label>

                    <textarea name="texto" id="texto" rows="4"
                              placeholder="Digite sua dúvida ou comentário para o palestrante..."
                              class="w-full rounded-md bg-gray-800 text-white p-3 border focus:outline-none focus:ring-2 focus:ring-blue-600 @error('texto') border-red-500 @else border-gray-600 @enderror">{{ old('texto') }}</textarea>

                    @error('texto')
                        <p class="text-red-500 text-sm font-semibold mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white font-bold px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
                    Enviar Pergunta
                </button>
            </form>
        </div>
    </div>

    <!-- Mural de Perguntas -->
    <div class="md:col-span-7">
        <div class="flex justify-between items-center mb-4">
            <h4 class="text-xl font-bold">📋 Perguntas do Evento</h4>
            <span class="text-gray-400 text-sm">Total de perguntas: {{ $perguntas->total() }}</span>
        </div>

        @forelse($perguntas as $pergunta)
            {{-- Card em formato de balão de chat --}}
            <div class="mb-4 bg-gray-800 border border-gray-700 rounded-2xl rounded-tl-none shadow-md p-5">
                <p class="text-sm text-blue-400 font-semibold mb-2">
                    👤 {{ $pergunta->user->name ?? 'Anônimo' }}
                </p>
                <p class="text-lg text-white leading-relaxed mb-3">{{ $pergunta->texto }}</p>
                <div class="flex justify-between items-center text-xs text-gray-400">
                    <span class="bg-green-600/20 text-green-400 px-2 py-0.5 rounded-full">{{ $pergunta->status }}</span>
                    <span>{{ $pergunta->created_at->format('d/m/Y H:i') }}</span>
                </div>
            </div>
        @empty
            <div class="bg-gray-800 text-gray-300 text-center rounded-xl p-6">
                Nenhuma pergunta enviada ainda. Seja o primeiro!
            </div>
        @endforelse

        <!-- Botões de Paginação -->
        @if(method_exists($perguntas, 'links'))
            <div class="flex justify-center mt-6">
                {{ $perguntas->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
=======
@section('content')
<div class="max-w-4xl mx-auto p-6">
    <div class="mb-6">
        <a href="{{ route('eventos.index') }}" class="text-blue-600 hover:underline">
            &larr; Voltar para a lista de eventos
        </a>
        <h1 class="text-3xl font-bold mt-2">{{ $evento->titulo }}</h1>
        <p class="text-gray-600 mt-1">{{ $evento->descricao }}</p>
    </div>

    {{-- Ticket #007: Formulário de envio de pergunta --}}
    <div class="bg-white p-6 rounded-lg shadow-md mb-8 border border-gray-100">
        <h2 class="text-xl font-bold mb-4">Faça sua Pergunta</h2>

        <form action="{{ route('perguntas.store', $evento) }}" method="POST">
            @csrf

            <div class="mb-4">
                <textarea 
                    name="conteudo" 
                    rows="3" 
                    placeholder="Digite sua pergunta..."
                    class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('conteudo') border-red-500 @enderror"
                >{{ old('conteudo') }}</textarea>

                @error('conteudo')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Ticket #008: Botão estilizado com Tailwind --}}
            <button 
                type="submit" 
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200 font-medium"
            >
                Enviar Pergunta
            </button>
        </form>
    </div>

    {{-- Ticket #008: Mural de perguntas estilo balões de chat --}}
    <div class="space-y-4">
        <h3 class="text-xl font-semibold mb-4">Perguntas do Evento</h3>

        @forelse($evento->perguntas as $pergunta)
            <div class="bg-blue-50 p-4 rounded-xl shadow-sm border border-blue-100 mb-4 max-w-2xl">
                <p class="text-gray-800 text-base mb-2">{{ $pergunta->conteudo }}</p>
                <span class="text-xs text-gray-500 block text-right">
                    {{ $pergunta->created_at ? $pergunta->created_at->diffForHumans() : 'Agora mesmo' }}
                </span>
            </div>
        @empty
            <p class="text-gray-500 italic">Nenhuma pergunta foi enviada ainda. Seja o primeiro a perguntar!</p>
        @endforelse
    </div>
</div>
@endsection
>>>>>>> cf28424dc35bb2b55f79ba90174c93dd151872c3
