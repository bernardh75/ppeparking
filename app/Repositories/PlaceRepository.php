<?php

namespace App\Repositories;

use App\Place;
use App\User;

class PlaceRepository
{

    protected $place;

    public function __construct(Place $place, User $user)
	{
		$this->place = $place;
		$this->user = $user;
	}

	private function save(Place $place, Array $inputs)
	{
		
		$place->nomplace = $inputs['nomplace'];
		$place->idutilisateurplace = $inputs['user'];

		$place->save();
	}

	public function getPaginate($n)
	{
		return $this->place->with('user')
		->orderBy('idutilisateurplace','desc')
		->paginate($n);
	}

	public function store(Array $inputs)
	{
		$this->place->create($inputs);

		$place = new $this->place;		

		$this->save($place);

		return $place;
	}

	public function getById($id)
	{
		return $this->place->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

}