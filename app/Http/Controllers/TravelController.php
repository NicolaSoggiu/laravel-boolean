<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{

    private $validations = [
        "date"          => "required|date",
        "title"         => "required|string|max:50",
        "text"          => "required|string",
        "image"         => "required|string",
        "country"       => "required|string|max:25",
        "city"          => "required|string|max:50",
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travel::paginate(3); 


        return view('travels.index', compact('travels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("travels.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validations);

        $data       = $request->all();
        $newTravel  = new Travel();

        $newTravel->date            = $data['date'];
        $newTravel->title           = $data['title'];
        $newTravel->text            = $data['text'];
        $newTravel->image           = $data['image'];
        $newTravel->country         = $data['country'];
        $newTravel->city            = $data['city'];
        $newTravel->save();

        return redirect()->route('travels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        return view("travels.show", compact("travel"));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        return view("travels.edit", compact("travel"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        $request->validate($this->validations);

        $data = $request->all();

        // aggiornare i dati nel db
        $travel->date            = $data["date"];
        $travel->title           = $data["title"];
        $travel->text            = $data["text"];
        $travel->image           = $data["image"];
        $travel->country         = $data["country"];
        $travel->update();

        // altro metodo per fare il redirect
        return to_route("travels.show", ["travel" => $travel->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel $travel)
    {
        $travel->delete();
        return to_route('travels.index')->with('delete_success', $travel);
    }

    public function restore($id)
    {
        Travel::withTrashed()->where('id', $id)->restore();

        $travel = Travel::find($id);

        return to_route('travels.index')->with('restore_success', $travel);
    }

    public function trashed()
    {
        $trashedTravels = Travel::onlyTrashed()->paginate(3); 

        

        return view('travels.trashed', compact('trashedTravels'));
    }

    public function hardDelete($id)
    {
        $travel = Travel::withTrashed()->find($id);
        $travel->forceDelete();

        return to_route('travels.trashed')->with('delete_success', $travel);
    
    }

    public function home()
    {
        $travels = Travel::all();
        return view('home',compact('travels'));
    }
}