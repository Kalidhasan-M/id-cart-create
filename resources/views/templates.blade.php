<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose ID Card Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-center mb-8">Choose ID Card Template</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Template 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border-2 border-blue-500">
                <div class="p-4 bg-blue-500 text-white">
                    <h2 class="text-xl font-bold">Professional Blue</h2>
                </div>
                <div class="p-4">
                    <img src="{{ asset('images/template1-preview.png') }}" alt="Template 1 Preview" class="w-full h-48 object-contain mb-4">
                    <a href="{{ route('id-card.show', ['id' => $idCardId ?? 0, 'template' => 'template1']) }}" 
                       class="block w-full bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-600">
                        Use This Template
                    </a>
                </div>
            </div>

            <!-- Template 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border-2 border-green-500">
                <div class="p-4 bg-green-500 text-white">
                    <h2 class="text-xl font-bold">Corporate Green</h2>
                </div>
                <div class="p-4">
                    <img src="{{ asset('images/template2-preview.png') }}" alt="Template 2 Preview" class="w-full h-48 object-contain mb-4">
                    <a href="{{ route('id-card.show', ['id' => $idCardId ?? 0, 'template' => 'template2']) }}" 
                       class="block w-full bg-green-500 text-white text-center py-2 rounded hover:bg-green-600">
                        Use This Template
                    </a>
                </div>
            </div>

            <!-- Template 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border-2 border-red-500">
                <div class="p-4 bg-red-500 text-white">
                    <h2 class="text-xl font-bold">Modern Red</h2>
                </div>
                <div class="p-4">
                    <img src="{{ asset('images/template3-preview.png') }}" alt="Template 3 Preview" class="w-full h-48 object-contain mb-4">
                    <a href="{{ route('id-card.show', ['id' => $idCardId ?? 0, 'template' => 'template3']) }}" 
                       class="block w-full bg-red-500 text-white text-center py-2 rounded hover:bg-red-600">
                        Use This Template
                    </a>
                </div>
            </div>

            <!-- Template 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border-2 border-purple-500">
                <div class="p-4 bg-purple-500 text-white">
                    <h2 class="text-xl font-bold">Creative Purple</h2>
                </div>
                <div class="p-4">
                    <img src="{{ asset('images/template4-preview.png') }}" alt="Template 4 Preview" class="w-full h-48 object-contain mb-4">
                    <a href="{{ route('id-card.show', ['id' => $idCardId ?? 0, 'template' => 'template4']) }}" 
                       class="block w-full bg-purple-500 text-white text-center py-2 rounded hover:bg-purple-600">
                        Use This Template
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>