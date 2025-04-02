<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdCard;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class IdCardController extends Controller
{
    public function store(Request $request)
    {
        // Log the incoming request for debugging
        Log::info('ID Card Store Request:', $request->all());

        try {
            // Validate the request data
            $validated = $request->validate([
                'full_name' => 'required|string|max:255',
                'id_number' => 'required|string|unique:id_cards,id_number|max:50',
                'dob' => 'required|date|before_or_equal:today',
                'gender' => 'required|string|in:Male,Female,Other',
                'blood_group' => 'required|string|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
                'phone_number' => 'required|string|max:20|regex:/^[0-9+\- ]+$/',
                'email' => 'required|email|unique:id_cards,email|max:255',
                'address' => 'required|string|max:500',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'department' => 'required|string|max:255',
                // 'issue_date' => 'required|date|after_or_equal:today',
                // 'expiry_date' => 'required|date|after_or_equal:issue_date',
            ]);

            // Handle File Upload
            $photoPath = null;
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('id_photos', 'public');
            }

            // Create ID Card record
            $idCard = IdCard::create([
                'full_name' => $validated['full_name'],
                'id_number' => $validated['id_number'],
                'dob' => $validated['dob'],
                'gender' => $validated['gender'],
                'blood_group' => $validated['blood_group'],
                'phone_number' => $validated['phone_number'],
                'email' => $validated['email'],
                'address' => $validated['address'],
                'photo' => $photoPath,
                'department' => $validated['department'],
                // 'issue_date' => $validated['issue_date'],
                // 'expiry_date' => $validated['expiry_date'],
            ]);

            Log::info('ID Card created successfully:', $idCard->toArray());

            return redirect()->route('id-card.show', $idCard->id)
            ->with('success', 'ID Card created successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation Error:', $e->errors());
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Error creating ID Card:', ['error' => $e->getMessage()]);
            return redirect()->back()
                ->with('error', 'Error creating ID Card: ' . $e->getMessage())
                ->withInput();
        }
    }


    // public function show($id)
    // {
    //     $idCard = IdCard::findOrFail($id);
    //     return view('idcard.show', compact('idCard'));
    // }

    // public function downloadPdf($id)
    // {
    //     $idCard = IdCard::findOrFail($id);
    //     $pdf = PDF::loadView('idcard.pdf', compact('idCard'));
    //     return $pdf->download('id-card-'.$idCard->id_number.'.pdf');
    // }
    // public function show($id, $template = 'template1')
    // {
    //     $idCard = IdCard::findOrFail($id);
    //     return view('idcard.show', [
    //         'idCard' => $idCard,
    //         'template' => $template
    //     ]);
    // }

    public function downloadPdf($id, $template)
    {
        $idCard = IdCard::findOrFail($id);
        $pdf = FacadePdf::loadView("idcard.templates.$template", compact('idCard'))
                 ->setPaper('a7', 'portrait'); // ID card size
        
        return $pdf->download("id-card-{$idCard->id_number}-{$template}.pdf");
    }

    public function templates()
    {
        return view('templates');
    }
    public function show($id, $template = 'template1')
{
    $idCard = IdCard::findOrFail($id);
    return view('idcard.show', [
        'idCard' => $idCard,
        'template' => $template
    ]);
}

}