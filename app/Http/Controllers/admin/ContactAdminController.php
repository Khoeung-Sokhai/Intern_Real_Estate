<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\ContactAdmin;
use Illuminate\Http\Request;

class ContactAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactAdmin::orderByDesc('id')->orderBy('id')->paginate(6);
        return view('backend.contactAdmins.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contactAdmins.create');
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
    
        ContactAdmin::create($request->all());
     
        return redirect()->route('contactAdmins.index')
                        ->with('success','Contact created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(ContactAdmin $contactAdmin)
    {
        return view('backend.contactAdmins.show',compact('contactAdmin'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactAdmin $contactAdmin)
    {
        return view('backend.contactAdmins.edit',compact('contactAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactAdmin $contactAdmin)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
    
        $contactAdmin->update($request->all());
    
        return redirect()->route('contactAdmins.index')
                        ->with('success','Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactAdmin $contactAdmin)
    {
        $contactAdmin->delete();
    
        return redirect()->route('contactAdmins.index')
                        ->with('success','Contact deleted successfully');
    }
}