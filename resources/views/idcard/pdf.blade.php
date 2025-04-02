<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; }
        .id-card { 
            width: 85mm; 
            height: 54mm; 
            border: 2px solid #2563eb;
            padding: 10px;
            position: relative;
        }
        .header { color: #2563eb; font-weight: bold; font-size: 12px; }
        .photo { width: 25mm; height: 30mm; border: 1px solid #ddd; float: left; margin-right: 5px; }
        .details { font-size: 10px; }
        .footer { position: absolute; bottom: 5px; font-size: 8px; width: calc(100% - 20px); }
    </style>
</head>
<body>
    <div class="id-card">
        <div class="header">COMPANY ID CARD</div>
        <div style="text-align: right; font-size: 8px;">ID: {{ $idCard->id_number }}</div>
        
        <hr style="border-top: 1px solid #2563eb; margin: 3px 0;">
        
        <div style="display: flex; margin-top: 5px;">
            @if($idCard->photo)
            <div class="photo">
                <img src="{{ asset('storage/'.$idCard->photo) }}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            @endif
            
            <div class="details" style="flex: 1;">
                <div style="font-weight: bold; font-size: 12px;">{{ $idCard->full_name }}</div>
                <div style="font-size: 10px; color: #555;">{{ $idCard->department }}</div>
                
                <table style="margin-top: 5px; width: 100%; font-size: 8px;">
                    <tr><td><strong>DOB:</strong></td><td>{{ date('d/m/Y', strtotime($idCard->dob)) }}</td></tr>
                    <tr><td><strong>Blood:</strong></td><td>{{ $idCard->blood_group }}</td></tr>
                    <tr><td><strong>Phone:</strong></td><td>{{ $idCard->phone_number }}</td></tr>
                    <tr><td><strong>Email:</strong></td><td>{{ $idCard->email }}</td></tr>
                </table>
            </div>
        </div>
        
        <div class="footer">
            <div><strong>Address:</strong> {{ $idCard->address }}</div>
            <div style="display: flex; justify-content: space-between; margin-top: 3px;">
                <div><strong>Issued:</strong> {{ date('d/m/Y', strtotime($idCard->issue_date)) }}</div