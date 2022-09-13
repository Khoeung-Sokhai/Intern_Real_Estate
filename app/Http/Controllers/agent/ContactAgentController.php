<?php

namespace App\Http\Controllers\agent;
use App\Http\Controllers\Controller;

use App\Models\ContactAgent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactAgent::where('agent_id','=', Auth::user()->id)->paginate(6);

        return view('agent.contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agent.contacts.create');
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
    
        ContactAgent::create($request->all());
     
        return redirect()->route('contacts.index')
                        ->with('success','Contact created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(ContactAgent $contactAgent)
    {
        return view('agent.contacts.show',compact('contactAgent'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactAgent $contact)
    {
        return view('agent.contacts.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactAgent $contactAgent)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
    
        $contactAgent->update($request->all());
    
        return redirect()->route('contacts.index')
                        ->with('success','Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactAgent $contact)
    {
        $contact->delete();
    
        return redirect()->route('contacts.index')
                        ->with('success','Contact deleted successfully');
    }
}