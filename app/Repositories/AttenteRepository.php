<?php

namespace App\Repositories;

use App\Attente;
use App\User;

class AttenteRepository
{

    protected $attente;

    public function __construct(Attente $attente, User $user)
	{
		$this->attente = $attente;
		$this->user = $user;
	}

	private function save(Attente $attente, Array $inputs)
	{
		$attente->idutilisateurattente = $inputs['user'];

		$attente->save();
	}

	public function getPaginate($n)
	{
		return $this->attente->with('user')
		->paginate($n);
	}

	public function store(Array $inputs)
	{
		
		$attente = new $this->attente;		

		$this->save($attente, $inputs);

		return $attente;
	}

	public function getById($id)
	{
		return $this->attente->findOrFail($id);
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