<?php namespace Modules\Wine\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class WineController extends Controller {
	
	public function index()
	{
		return view('pages.home');
	}

	public function contact() {
		return view('pages.form.contact');
	}

	public function salecontact() {
		return view('pages.form.sale-contact');
	}
	
	public function changeorder() {
		return view('pages.form.change-order');
	}

	public function changerequest() {
		return view('pages.form.change-request');
	}

	public function purchase() {
		return view('pages.form.purchase-order');
	}
	
	public function request() {
		return view('pages.form.request-quote');
	}
	
	public function supply() {
		return view('pages.form.supply-form');
	}
	
	public function vendor() {
		return view('pages.form.vendor');
	}

	public function cognac() {
		return view('pages.cognac');
	}

	public function champagne() {
		return view('pages.champagne');
	}

	public function redwine() {
		return view('pages.red-wine');
	}
	
	public function selection() {
		return view('pages.cognac-selection');
	}
	
	public function cognacseguinotsélection(){
		return view('pages.products.cognac.selection.cognac-seguinot-sélection');
	}
	
	public function vsop() {
		return view('pages.cognac-vsop');
	}

	public function VSOPseguinot() {
		return view('pages.products.cognac..VSOP.VSOP-seguinot');
	}

	public function toureiffel() {
		return view('pages.products.cognac.VSOP.tour-eiffel');
	}

	public function XO() {
		return view('pages.products.cognac.VSOP.XO');
	}

	public function ageinconnu() {
		return view('pages.products.cognac.VSOP.age-inconnu');
	}

	public function reserve() {
		return view('pages.products.cognac.VSOP.reserve');
	}

	public function vincemus() {
		return view('pages.products.cognac.VSOP.vincemus');
	}

}