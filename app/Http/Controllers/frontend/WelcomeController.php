<?php


namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::orderByDesc('id')->take(10)->orderBy('id')->get();
        $phnom_penh = Property::where('address','=','Phnom Penh')->count();
        $sihano = Property::where('address','=','Sihano')->count();
        $siem_reab = Property::where('address','=','Siem Reab')->count();
        $bat_dambang = Property::where('address','=','Batdambang')->count();
        $kompongcham = Property::where('address','=','Kompongcham')->count();
        $kompot = Property::where('address','=','kompot')->count();
        return view('frontend.welcome',compact('properties', 'phnom_penh', 'sihano', 'siem_reab', 'kompongcham', 'bat_dambang', 'kompot'));
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
        //
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
