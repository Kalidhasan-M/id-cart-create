<!DOCTYPE html>
<html>
<head>
    <style>
        .id-card {
            width: 85mm;
            height: 54mm;
            background: linear-gradient(to bottom, #f8fafc, #e2e8f0);
            border: 1px solid #2563eb;
            padding: 5mm;
            font-family: Arial, sans-serif;
            position: relative;
        }
        .header {
            color: #2563eb;
            font-weight: bold;
            text-align: center;
            border-bottom: 1px solid #2563eb;
            padding-bottom: 2mm;
            margin-bottom: 3mm;
        }
        .photo {
            width: 25mm;
            height: 30mm;
            border: 1px solid #ddd;
            float: left;
            margin-right: 3mm;
            background-color: #fff;
        }
        .details {
            font-size: 9pt;
        }
        .name {
            font-weight: bold;
            font-size: 12pt;
            margin-bottom: 1mm;
        }
        .department {
            font-style: italic;
            margin-bottom: 2mm;
        }
        .footer {
            position: absolute;
            bottom: 3mm;
            font-size: 6pt;
            width: calc(100% - 10mm);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="id-card">
        <div class="header">COMPANY ID CARD</div>
        
        @if($idCard->photo)
        <div class="photo">
            <img src="{{ storage_path('app/public/'.$idCard->photo) }}" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        @endif
        
        <div class="details">
            <div class="name">{{ $idCard->full_name }}</div>
            <div class="department">{{ $idCard->department }}</div>
            
            <table>
                <tr><td>ID:</td><td>{{ $idCard->id_number }}</td></tr>
                <tr><td>DOB:</td><td>{{ date('d/m/Y', strtotime($idCard->dob)) }}</td></tr>
                <tr><td>Blood:</td><td>{{ $idCard->blood_group }}</td></tr>
                <tr><td>Phone:</td><td>{{ $idCard->phone_number }}</td></tr>
            </table>
        </div>
        
        <div class="footer">
            Valid until: {{ date('d/m/Y', strtotime($idCard->expiry_date)) }}
        </div>
    </div>
</body>
</html>