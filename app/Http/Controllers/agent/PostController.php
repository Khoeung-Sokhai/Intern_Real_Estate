<?php

namespace App\Http\Controllers\agent;
use App\Http\Controllers\Controller;


use App\Models\Property;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties= Property::orderByDesc('id')->orderBy('id')->paginate(20);
        return view('agent.posts.index', compact('properties'));
    }
    public function create()
    {

        return view('agent.posts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);

            $properties = new Property([
                "name" => $request->name,
                "address" => $request->address,
                "bedroom" => $request->bedroom,
                "bathroom" => $request->bathroom,
                "size" => $request->size,
                "price_sale" => $request->price_sale,
                "price_rent" => $request->price_rent,
                "price_rental" => $request->price_rental,
                
                "cover" => $imageName,
                //"types" => $request->types,
                "description" => $request->description,
                "agent_id" => $request->agent_id,
                "amenity" => $request->amenity,

            ]);
            $properties->save();
        }
       

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['property_id'] = $properties->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/property"), $imageName);
                Image::create($request->all());
            }
        }

        // dd($request);

        return redirect()->route('posts.index')->with('success', 'Property created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $post)
    {
        // $property->load('images');
        // $id=Property::get();

        // dd($id);
        
        
        return view('agent.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = Property::findOrFail($id);
        return view('agent.posts.edit')->with('properties', $properties);
        
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
        $properties = Property::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (File::exists("cover/" . $properties->cover)) {
                File::delete("cover/" . $properties->cover);
            }
            $file = $request->file("cover");
            $properties->cover = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/cover"), $properties->cover);
            $request['cover'] = $properties->cover;
        }

        $properties->update([
            "name" => $request->name,
            "address" => $request->address,
            "bedroom" => $request->bedroom,
            "bathroom" => $request->bathroom,
            "size" => $request->size,
            "price_sale" => $request->price_sale,
            "price_rent" => $request->price_rent,
            "price_rental" => $request->price_rental,
            //"types" => $request->types,            
            "description" => $request->description,            

            "cover" => $properties->cover,
            "agent_id" => $request->agent_id,
            "amenity" => $request->amenity,
        ]);

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request["property_id"] = $id;
                $request["image"] = $imageName;
                $file->move(\public_path("property"), $imageName);
                Image::create($request->all());
            }
        }
        return redirect()->route('posts.index')
            ->with('success', 'Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properties = Property::findOrFail($id);

        if (File::exists("cover/" . $properties->cover)) {
            File::delete("cover/" . $properties->cover);
        }
        $images = Image::where("property_id", $properties->id)->get();
        foreach ($images as $image) {
            if (File::exists("property/" . $image->image)) {
                File::delete("property/" . $image->image);
            }
        }
        $properties->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Address deleted successfully');
    }
    public function deleteimage(int $property_id)
    {
        $images = Image::findOrFail($property_id);
        if (File::exists("property/" .$images->image)) {
            File::delete("property/" .$images->image);
        }

        $images->delete();
        return redirect()-> back();
    }
   
}