<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>{{ $title }}</title>
</head>
<body>
    <div>
        <nav class="bg-gray-800 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-white text-lg font-bold">FitLife</a>
                <div class="space-x-4">
                    <a href="{{ route('cours.index') }}" class="text-white px-4 py-2 rounded hover:bg-gray-700">Accueil</a>
                    <a href="{{ route('reservations.index') }}" class="text-white px-4 py-2 rounded hover:bg-gray-700">
                        Gérer les réservations
                    </a>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>


