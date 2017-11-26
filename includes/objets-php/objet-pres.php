<?php 
class Presentation {

		public function __construct($titre, $descriptif, $descriptif2, $role,  $fonction)
		{
			$this->titre = $titre;
			$this->descriptif = $descriptif;
			$this->descriptif2 = $descriptif2;
			$this->role = $role;
			$this->fonction = $fonction;
		}

		// public function getTitre()
		// {
		// 	return $this->$titre;
		// }
		// public function getdescriptif()
		// {
		// 	return $this->$descriptif;
		// }
		// public function getRole()
		// {
		// 	return $this->$role;
		// }
}