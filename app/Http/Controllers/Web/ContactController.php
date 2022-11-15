<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            // 'mail_to'       => 'required',
            'mail_from'     => 'required',
            'phone_number'  => 'required|digits_between:10, 13|numeric',
            'message'       => 'required'
        ]);

        if($request->input('submit')) {
            echo 'recaptcha tidak terpenuhi';
        }

        Contact::create ([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'mail_from'     => $request->mail_from,
            'mail_to'       => 'ady@wynacom.com',
            'phone_number'  => $request->phone_number,
            'subject'       => 'Help',
            'message'       => $request->message,
        ]); 

            return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you!.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
