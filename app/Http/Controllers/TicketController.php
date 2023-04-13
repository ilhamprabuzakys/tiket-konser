<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Concert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concerts = Concert::all();
        $tickets = Ticket::all();
        return view('dashboard.ticket.index', [
            'title' => 'Tiket',
            'concerts' => $concerts,
            'tickets' => $tickets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ticket.create', [
            'title' => 'Tiket'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'notelp' => 'required',
            'concert_id' => 'required',
            'jumlah_tiket' => 'required',
        ];

        $requestData = $request->all();
        $ticketCode = "TKT-" . random_int(100000, 999999);
        $rules['ticket_code'] = 'required';
        $requestData['ticket_code'] = $ticketCode;
        $request->merge(['ticket_code' => $requestData['ticket_code']]);
        $validator = Validator::make($requestData, $rules);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator->errors())->withInput();
        // }

        // 3 Tahap
        $validated = $validator->validate();
        // dd($validated);

        Ticket::create($validated);

        return redirect(route('public.tiket.index'))->with('success', "Tiket baru <strong>$ticketCode</strong> berhasil <strong>dibuat</strong>!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
