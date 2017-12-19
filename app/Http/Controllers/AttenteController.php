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

    public function __construct(AttenteRepository $attenteRepository)
    {
        $this->attenteRepository = $attenteRepository;
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
    public function store(AttenteCreateRequest $request)
    {
        //$users = User::all();
        //$places = Place::all();
        $attente = $this->attenteRepository->store($request->all());

       // while($places->id == true) {
         //   if(Auth::user()->id = $places->idutilisateurplace)
           //     $placeutil = $places->id;
            //}
       
            
        return redirect('attente')->withOk("Vous avez été ajouté dans la liste d'attente. </br> Un administrateur se chargera au plus vite de vous attribuer une place. </br>Actualisez votre page pour connaître votre place ! </br></br>Numéro de place : " /*. $placeutil*/);
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
        $this->attenteRepository->destroy($id);

        return back();
    }
}
