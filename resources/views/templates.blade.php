


<div class="container mx-auto p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">

    <!-- ID Card Type 1: Simple -->
    <div id="id-card-1" class="w-64 border rounded-lg shadow-lg p-4 text-center bg-white">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="w-24 h-24 mx-auto rounded-full">
        <h2 class="text-lg font-semibold mt-2">John Doe</h2>
        <p class="text-gray-600 text-sm">Software Engineer</p>
        <p class="text-gray-500 text-xs">ID: 123456</p>
    </div>

    <!-- ID Card Type 2: Modern with QR Code -->
    <div id="id-card-2" class="w-64 border rounded-lg shadow-lg p-4 text-center bg-gray-100">
        <h2 class="text-lg font-bold text-gray-800">Company Name</h2>
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="w-24 h-24 mx-auto rounded-full">
        <h3 class="text-md font-semibold mt-2">Jane Smith</h3>
        <p class="text-gray-600 text-sm">Marketing Manager</p>
        <p class="text-gray-500 text-xs">ID: 789012</p>
        <img src="{{ asset('images/qr-code.png') }}" alt="QR Code" class="w-16 h-16 mx-auto mt-2">
    </div>

    <!-- ID Card Type 3: Corporate Style -->
    <div id="id-card-3" class="w-64 border rounded-lg shadow-lg bg-blue-500 text-white p-4 text-center">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="w-24 h-24 mx-auto rounded-full border-2 border-white">
        <h2 class="text-lg font-semibold mt-2">Alice Brown</h2>
        <p class="text-sm">Senior Designer</p>
        <p class="text-xs">ID: 345678</p>
    </div>

    <!-- ID Card Type 4: Minimalist Vertical -->
    <div id="id-card-4" class="w-64 border rounded-lg shadow-lg bg-white p-4 flex flex-col items-center">
        <div class="w-full bg-green-500 text-white py-2 text-center">
            <h2 class="font-bold">Company ID</h2>
        </div>
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="w-24 h-24 mt-2 rounded-full">
        <h3 class="text-md font-semibold mt-2">Michael Johnson</h3>
        <p class="text-gray-600 text-sm">HR Manager</p>
        <p class="text-gray-500 text-xs">ID: 901234</p>
    </div>

</div>
