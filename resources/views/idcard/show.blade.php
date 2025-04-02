<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card - {{ $template }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Print-specific styles */
        @media print {
            body * {
                visibility: hidden;
            }
            .id-card-container, .id-card-container * {
                visibility: visible;
            }
            .id-card-container {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="max-w-4xl w-full">
        <!-- Template Selection Buttons - Hidden when printing -->
        <div class="flex space-x-2 mb-4 overflow-x-auto pb-2 no-print">
            <a href="{{ route('id-card.show', ['id' => $idCard->id, 'template' => 'template1']) }}"
               class="px-4 py-2 rounded {{ $template === 'template1' ? 'bg-blue-600 text-white' : 'bg-white' }}">
                Template 1
            </a>
            <a href="{{ route('id-card.show', ['id' => $idCard->id, 'template' => 'template2']) }}"
               class="px-4 py-2 rounded {{ $template === 'template2' ? 'bg-blue-600 text-white' : 'bg-white' }}">
                Template 2
            </a>
        </div>

        <!-- ID Card Preview - This will be the only visible element when printing -->
        <div class="id-card-container bg-white p-6 rounded-lg shadow-lg">
            @include("idcard.templates.$template", ['idCard' => $idCard])
        </div>

        <!-- Action Buttons - Hidden when printing -->
        <div class="mt-6 text-center space-x-4 no-print">
            <button onclick="window.print()" 
               class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 inline-block">
                Print ID Card
            </button>
            {{-- <a href="{{ route('id-card.download', ['id' => $idCard->id, 'template' => $template]) }}" 
               class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 inline-block">
                Download PDF (Alternative)
            </a> --}}
        </div>
    </div>

    <script>
        // Optional: Adjust print layout before printing
        window.onbeforeprint = function() {
            // You can add any last-minute adjustments here
            console.log('Preparing for printing...');
        };
    </script>
</body>
</html>