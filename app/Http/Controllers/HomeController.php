<?php
  
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Room;
use App\Models\Property;
use App\Models\ContactAdmin;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

 
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $property = Property::get()->count();             
        $room = Room::get()->count();             
        return view('frontend.welcome',compact('property','room'));
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        // dd('12345');

        $user = User::get()->count();
        $agent = User::where('type','=','manager')->count();
        $contact = ContactAdmin::get()->count();
        $property = Property::get()->count();
       

        return view('backend.layouts.dashboard', compact('contact','property','user','agent'));

    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        $users = User::where('type','=','user')->count();

        $property = Property::where('agent_id','=', Auth::user()->id)->get()->count();

        $contact = Contact::get()->count();

        return view('agent.layouts.dashboard',compact('users','property','contact'));
    }
}