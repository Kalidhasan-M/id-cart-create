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
        
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('id-card.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            
            <div>
                <label class="block font-medium">Full Name</label>
                <input type="text" name="full_name" value="{{ old('full_name') }}" class="w-full px-3 py-2 border rounded-md" placeholder="Enter full name" required>
            </div>
            
            <div>
                <label class="block font-medium">ID Number</label>
                <input type="text" name="id_number" value="{{ old('id_number') }}" class="w-full px-3 py-2 border rounded-md" placeholder="Enter ID number" required>
            </div>
            
            <div>
                <label class="block font-medium">Date of Birth</label>
                <input type="date" name="dob" value="{{ old('dob') }}" class="w-full px-3 py-2 border rounded-md" required>
            </div>
            
            <div>
                <label class="block font-medium">Gender</label>
                <select name="gender" class="w-full px-3 py-2 border rounded-md">
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            
            <div>
                <label class="block font-medium">Blood Group</label>
                <select name="blood_group" class="w-full px-3 py-2 border rounded-md">
                    <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                    <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                    <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                    <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                    <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                    <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                    <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                    <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                </select>
            </div>
            
            <div>
                <label class="block font-medium">Phone Number</label>
                <input type="tel" name="phone_number" value="{{ old('phone_number') }}" class="w-full px-3 py-2 border rounded-md" placeholder="Enter phone number" required>
            </div>
            
            <div>
                <label class="block font-medium">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full px-3 py-2 border rounded-md" placeholder="Enter email" required>
            </div>
            
            <div>
                <label class="block font-medium">Address</label>
                <textarea name="address" class="w-full px-3 py-2 border rounded-md" placeholder="Enter address">{{ old('address') }}</textarea>
            </div>
            
            <div>
                <label class="block font-medium">Upload Photo</label>
                <input type="file" name="photo" class="w-full px-3 py-2 border rounded-md" accept="image/*">
            </div>
            
            <div>
                <label class="block font-medium">Department / Designation</label>
                <input type="text" name="department" value="{{ old('department') }}" class="w-full px-3 py-2 border rounded-md" placeholder="Enter department or designation" required>
            </div>
{{--             
            <div>
                <label class="block font-medium">Issue Date</label>
                <input type="date" 
                       name="issue_date" 
                       value="{{ old('issue_date', date('Y-m-d')) }}" 
                       min="{{ date('Y-m-d') }}" 
                       class="w-full px-3 py-2 border rounded-md" 
                       required>
            </div>
            
            <div>
                <label class="block font-medium">Expiry Date</label>
                <input type="date" name="expiry_date" value="{{ old('expiry_date') }}" class="w-full px-3 py-2 border rounded-md" required>
            </div> --}}
            
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Submit</button>
        </form>
    </div>
</body>
</html>