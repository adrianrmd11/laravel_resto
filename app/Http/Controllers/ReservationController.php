<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;

class ReservationController extends Controller
{
    /**
     * Tampilkan form reservasi dan data meja.
     */
    public function index()
    {
        $tables = Table::all();
        return view('booking_form', compact('tables'));
    }

    /**
     * Simpan data reservasi baru dan tandai meja sebagai tidak tersedia.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:20',
            'guest_total' => 'required|integer|min:1',
            'date'        => 'required|date',
            'time'        => 'required',
            'table_id'    => 'required|exists:tables,id',
        ]);

        // Simpan data reservasi
        $reservation = Reservation::create($request->all());

        // Tandai meja sebagai tidak tersedia
        $table = Table::find($request->table_id);
        $table->available = false;
        $table->save();

        return redirect()->back()->with('success', 'Reservasi berhasil dikirim!');
    }

    /**
     * Tampilkan daftar semua reservasi.
     */
    public function list()
    {
        $reservations = Reservation::with('table')->latest()->get();
        return view('booking_list', compact('reservations'));
    }

    public function lihat()
    {
        $reservations = Reservation::with('table')->latest()->get();
        return view('booking_list', compact('reservations'));
    }
}

    
