<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5">
    <div class="container mx-auto max-w-4xl">
        <h1 class="text-2xl font-bold mb-4">Gerenciador de Posts</h1>

        <!-- Exibe mensagens de sucesso -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('succesPosts') }}
            </div>
        @endif

        <!-- Formulário para criar um novo post -->
        <form action="/posts" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Título</label>
                <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Conteúdo</label>
                <textarea name="content" id="content" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Criar Post
            </button>
        </form>

        <!-- Lista de posts existentes -->
        <h2 class="text-xl font-bold mb-4">Posts Existentes</h2>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            @forelse($posts as $post)
                <div class="mb-4">
                    <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <p class="text-sm text-gray-500">Slug: {{ $post->slug }}</p>
                </div>
                <hr class="mb-4">
            @empty
                <p class="text-gray-500">Nenhum post encontrado.</p>
            @endforelse
        </div>
    </div>
</body>
</html>
