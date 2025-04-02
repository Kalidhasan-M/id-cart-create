<!DOCTYPE html>
<html>
<head>
    <style>
        .id-card {
            width: 85mm;
            height: 54mm;
            background-color: #f0fdf4;
            border: 2px solid #16a34a;
            padding: 5mm;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
        }
        .header {
            background-color: #16a34a;
            color: white;
            padding: 2mm;
            text-align: center;
            margin: -5mm -5mm 3mm -5mm;
            font-weight: bold;
        }
        .content {
            display: flex;
        }
        .photo {
            width: 25mm;
            height: 30mm;
            border: 1px solid #ddd;
            margin-right: 3mm;
            background-color: #fff;
        }
        .details {
            flex: 1;
            font-size: 8pt;
        }
        .name {
            font-weight: bold;
            font-size: 11pt;
            margin-bottom: 1mm;
            color: #166534;
        }
        .footer {
            position: absolute;
            bottom: 3mm;
            right: 5mm;
            font-size: 6pt;
            color: #166534;
        }
    </style>
</head>
<body>
    <div class="id-card">
        <div class="header">STAFF IDENTIFICATION CARD</div>
        
        <div class="content">
            @if($idCard->photo)
            <div class="photo">
                <img src="{{ asset('storage/'.$idCard->photo) }}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            @endif
            
            <div class="details">
                <div class="name">{{ $idCard->full_name }}</div>
                <div style="margin-bottom: 2mm;">{{ $idCard->department }}</div>
                
                <table>
                    <tr><td><strong>ID:</strong></td><td>{{ $idCard->id_number }}</td></tr>
                    <tr><td><strong>Valid:</strong></td><td>{{ date('d/m/Y', strtotime($idCard->issue_date)) }} - {{ date('d/m/Y', strtotime($idCard->expiry_date)) }}</td></tr>
                    <tr><td><strong>Contact:</strong></td><td>{{ $idCard->phone_number }}</td></tr>
                </table>
            </div>
        </div>
        
        <div class="footer">
            Issued by: COMPANY NAME
        </div>
    </div>
</body>
</html>