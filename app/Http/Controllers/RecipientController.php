<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use Illuminate\Http\Request;
use App\Mail\SenderMails;
use Illuminate\Support\Facades\Mail;

class RecipientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipients = Recipient::paginate(15);
        //dd($recipients);
        return view('recipients.index', compact('recipients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $u = Recipient::factory()->create([
            'fullName' => 'Vsevolod',
            'email' => 'test@example.com',
        ]);
        Mail::to('vsev92@gmail.com')->send(new SenderMails($u));


        return response()->json(['status' => 'Email sent']);
    }
    /**
     * Display the specified resource.
     */
    public function show(Recipient $recipient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipient $recipient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipient $recipient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipient $recipient)
    {
        //
    }
}
