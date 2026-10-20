<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Catégories</title>
    <!-- Simple styling using Tailwind CSS CDN for quick setup -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Catégories Disponibles</h1>
        
        @if($categories->isEmpty())
            <p class="text-gray-500">Aucune catégorie trouvée.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($categories as $category)
                    <div class="border p-4 rounded-lg shadow-sm hover:shadow-md transition">
                        <h2 class="text-xl font-semibold text-blue-600">{{ $category->nom_categorie }}</h2>
                        <p class="text-gray-600 mt-2">{{ $category->description }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>