<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required',
            'people' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);

        // Simpan data ke database
        Booking::create($request->all());

        // Redirect kembali dengan pesan sukses
        return back()->with('success', 'Berhasil membuat pesanan.');
    }
}

