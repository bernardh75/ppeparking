<?php

namespace App\Repositories;

use App\Place;

class PlaceRepository
{

    protected $place;

    public function __construct(Place $place)
	{
		$this->place = $place;
	}

	private function save(Place $place, Array $inputs)
	{
		$place->nomplace = $inputs['nomplace'];


		$place->save();
	}

	public function getPaginate($n)
	{
		return $this->place->paginate($n);
	}

	public function store(Array $inputs)
	{
		$place = new $this->place;		

		$this->save($place);

		return $place;
	}

	public function getByIdplace($idplace)
	{
		return $this->place->findOrFail($idplace);
	}

	public function update($idplace, Array $inputs)
	{
		$this->save($this->getByIdplace($idplace), $inputs);
	}

	public function destroy($idplace)
	{
		$this->getByIdplace($idplace)->delete();
	}

}