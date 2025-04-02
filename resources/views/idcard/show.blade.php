<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card - {{ $template }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="max-w-4xl w-full">
        <!-- Template Selection Buttons -->
        <div class="flex space-x-2 mb-4 overflow-x-auto pb-2">
            <a href="{{ route('id-card.show', ['id' => $idCard->id, 'template' => 'template1']) }}"
               class="px-4 py-2 rounded {{ $template === 'template1' ? 'bg-blue-600 text-white' : 'bg-white' }}">
                Template 1
            </a>
            <a href="{{ route('id-card.show', ['id' => $idCard->id, 'template' => 'template2']) }}"
               class="px-4 py-2 rounded {{ $template === 'template2' ? 'bg-blue-600 text-white' : 'bg-white' }}">
                Template 2
            </a>
            {{-- <a href="{{ route('id-card.show', ['id' => $idCard->id, 'template' => 'template3']) }}"
               class="px-4 py-2 rounded {{ $template === 'template3' ? 'bg-blue-600 text-white' : 'bg-white' }}">
                Template 3
            </a>
            <a href="{{ route('id-card.show', ['id' => $idCard->id, 'template' => 'template4']) }}"
               class="px-4 py-2 rounded {{ $template === 'template4' ? 'bg-blue-600 text-white' : 'bg-white' }}">
                Template 4
            </a> --}}
        </div>

        <!-- ID Card Preview -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            @include("idcard.templates.$template", ['idCard' => $idCard])
        </div>

        <!-- Download Button -->
        <div class="mt-6 text-center">
            <a href="{{ route('id-card.download', ['id' => $idCard->id, 'template' => $template]) }}" 
               class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 inline-block">
                Download PDF
            </a>
        </div>
    </div>
</body>
</html>