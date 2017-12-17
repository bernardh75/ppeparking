<?php


namespace App\Http\Controllers;

use App\Http\Requests\PlaceCreateRequest;
use App\Http\Requests\PlaceUpdateRequest;

use App\Repositories\PlaceRepository;

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
        return view('admin.place.create');
    }

    public function store(PlaceCreateRequest $request)
    {
        $place = $this->placeRepository->store($request->all());

        return redirect('place')->withOk("La place " . $place->nomplace . " a été créé.");
    }

    public function show($idplace)
    {
        $place = $this->placeRepository->getByIdplace($idplace);

        return view('admin.place.show',  compact('place'));
    }

    public function edit($idplace)
    {
        $place = $this->placeRepository->getByIdplace($idplace);

        return view('admin.place.edit',  compact('place'));
    }

    public function update(PlaceUpdateRequest $request, $idplace)
    {
        $this->placeRepository->update($idplace, $request->all());
        
        return redirect('place')->withOk("La place " . $request->input('nomplace') . " a été modifiée.");
    }

    public function destroy($idplace)
    {
        $this->placeRepository->destroy($idplace);

        return back();
    }

}