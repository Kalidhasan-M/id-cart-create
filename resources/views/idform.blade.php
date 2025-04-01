<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-semibold mb-4 text-center">ID Card Form</h2>
        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label class="block font-medium">Full Name</label>
                <input type="text" class="w-full px-3 py-2 border rounded-md" placeholder="Enter full name" required>
            </div>
            <div>
                <label class="block font-medium">ID Number</label>
                <input type="text" class="w-full px-3 py-2 border rounded-md" placeholder="Enter ID number" required>
            </div>
            <div>
                <label class="block font-medium">Date of Birth</label>
                <input type="date" class="w-full px-3 py-2 border rounded-md" required>
            </div>
            <div>
                <label class="block font-medium">Gender</label>
                <select class="w-full px-3 py-2 border rounded-md">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div>
                <label class="block font-medium">Blood Group</label>
                <select class="w-full px-3 py-2 border rounded-md">
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                </select>
            </div>
            <div>
                <label class="block font-medium">Phone Number</label>
                <input type="tel" class="w-full px-3 py-2 border rounded-md" placeholder="Enter phone number" required>
            </div>
            <div>
                <label class="block font-medium">Email</label>
                <input type="email" class="w-full px-3 py-2 border rounded-md" placeholder="Enter email" required>
            </div>
            <div>
                <label class="block font-medium">Address</label>
                <textarea class="w-full px-3 py-2 border rounded-md" placeholder="Enter address"></textarea>
            </div>
            <div>
                <label class="block font-medium">Upload Photo</label>
                <input type="file" class="w-full px-3 py-2 border rounded-md" accept="image/*">
            </div>
            <div>
                <label class="block font-medium">Upload Signature</label>
                <input type="file" class="w-full px-3 py-2 border rounded-md" accept="image/*">
            </div>
            <div>
                <label class="block font-medium">Department / Designation</label>
                <input type="text" class="w-full px-3 py-2 border rounded-md" placeholder="Enter department or designation" required>
            </div>
            <div>
                <label class="block font-medium">Issue Date</label>
                <input type="date" class="w-full px-3 py-2 border rounded-md" required>
            </div>
            <div>
                <label class="block font-medium">Expiry Date</label>
                <input type="date" class="w-full px-3 py-2 border rounded-md" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Submit</button>
        </form>
    </div>
</body>
</html>