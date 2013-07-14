<?php 
	class Facture extends AppModel {
		

		public $hasAndBelongsToMany = 'Produit';
		public $belongsTo ="Client";
	}