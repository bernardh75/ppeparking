<?php


namespace App\Http\Controllers;


use App\Http\Requests\PlaceCreateRequest;
use App\Http\Requests\PlaceUpdateRequest;

use App\Repositories\PlaceRepository;

use App\User;

use Illuminate\Http\Request;

class PlaceController extends Controller
{

    protected $placeRepository;

    protected $nbrPerPage = 10;

    public function __construct(PlaceRepository $placeRepository)
    {
        $this->placeRepository = $placeRepository;
    }

    

    public function index()
    {
        $places = $this->placeRepository->getPaginate($this->nbrPerPage);
        $links = $places->render();

        return view('admin.place.index', compact('places', 'links'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.place.create', compact('users'));
    }

    public function store(PlaceCreateRequest $request)
    {
        $place = $this->placeRepository->store($request->all());

        return redirect('place')->withOk("La place " . $place->id . " a été créé.");
    }

    public function show($id)
    {
        $place = $this->placeRepository->getById($id);

        return view('admin.place.show',  compact('place'));
    }

    public function edit($id)
    {
        $users = User::all();
        $place = $this->placeRepository->getById($id);

        return view('admin.place.edit',  compact('place', 'users'));
    }

    public function update(PlaceUpdateRequest $request, $id)
    {
        $this->placeRepository->update($id, $request->all());
        
        return redirect('place')->withOk("La place " . $request->input('id') . " a été modifiée.");
    }

    public function destroy($id)
    {
        $this->placeRepository->destroy($id);

        return back();
    }

}