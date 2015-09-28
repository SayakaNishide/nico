<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
  protected $place = 'place';
	protected $primaryKey = 'place_no';

    public function ablePlace()
	{
		return $this->place_able == null;
	}

	public function haveMirror()
	{
		return $this->mirror != null;
	}

	public function havePiano()
	{
		return $this->piano != null;
	}

}
