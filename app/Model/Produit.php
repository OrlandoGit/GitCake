<?php

	class Produit extends AppModel{
		public $hasAndBelongsToMany = 'Facture';
        
	}