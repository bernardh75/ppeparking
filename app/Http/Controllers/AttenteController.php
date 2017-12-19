<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttenteCreateRequest;

use App\Repositories\AttenteRepository;

use Illuminate\Http\Request;

use App\User;
use App\Place;

class AttenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $attenteRepository;

    protected $nbrPerPage = 10;

    public function __construct(AttenteRepository $attenteRepository, User $user, Place $place)
    {
        $this->attenteRepository = $attenteRepository;
        $this->user = $user;
        $this->place = $place;
    }

    public function index()
    {
        $attentes = $this->attenteRepository->getPaginate($this->nbrPerPage);
        $links = $attentes->render();

        return view('admin.attente.index', compact('attentes', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.attente.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttenteCreateRequest $request, Place $place, User $user)
    {
        $attente = $this->attenteRepository->store($request->all());

        while($place->id == true) {
           if(Auth::user()->id = $place->idutilisateurplace)
                $placeutil = $place->id;
                return $place->id;
            }
       
            
        return redirect('attente')->withOk("Vous avez été ajouté dans la liste d'attente. </br> Un administrateur se chargera au plus vite de vous attribuer une place. </br>Actualisez votre page pour connaître votre place !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        $places = Place::all();
        return view ('admin.attente.show', compact('users','places'));
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
        $this->attenteRepository->destroy($id);

        return back();
    }
}
