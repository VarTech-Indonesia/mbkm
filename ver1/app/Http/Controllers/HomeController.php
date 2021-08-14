<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$data = [
			'title' => 'Home | merdekabelajar'
		];
		return view('pages.home', $data);
	}

	public function pkkm()
	{
		$data = [
			'title' => 'PKKM | merdekabelajar'
		];
		return view('pages.pkkm', $data);
	}

	public function pkkmsbmitb()
	{
		$data = [
			'title' => 'PKKM-SBM-ITB | merdekabelajar'
		];
		return view('pages.pkkmsbmitb', $data);
	}

	public function pkkmsapkkitb()
	{
		$data = [
			'title' => 'PKKM-SAPKK-ITB | merdekabelajar'
		];
		return view('pages.pkkmsapkkitb', $data);
	}

	public function pkkmstieitb()
	{
		$data = [
			'title' => 'PKKM-STIE-ITB | merdekabelajar'
		];
		return view('pages.pkkmstieitb', $data);
	}

	public function pkkmgeofisikaitb()
	{
		$data = [
			'title' => 'PKKM-GEOFISIKA-ITB | merdekabelajar'
		];
		return view('pages.pkkmgeofisikaitb', $data);
	}


	public function permatasakti()
	{
		$data = [
			'title' => 'PermataSakti | merdekabelajar'
		];
		return view('pages.permatasakti', $data);
	}

	public function bangkit()
	{
		$data = [
			'title' => 'bangkit | merdekabelajar'
		];
		return view('pages.bangkit', $data);
	}


	public function matchingfund()
	{
		$data = [
			'title' => 'matchingfund | merdekabelajar'
		];
		return view('pages.matchingfund', $data);
	}

	public function iisma()
	{
		$data = [
			'title' => 'iisma | merdekabelajar'
		];
		return view('pages.iisma', $data);
	}


	public function kkntematik()
	{
		$data = [
			'title' => 'kkntematik | merdekabelajar'
		];
		return view('pages.kkntematik', $data);
	}

	public function summerschool()
	{
		$data = [
			'title' => 'Summer School | merdekabelajar'
		];
		return view('pages.summerschool', $data);
	}

	public function pnpm()
	{
		$data = [
			'title' => 'pn/pm | merdekabelajar'
		];
		return view('pages.pnpm', $data);
	}

	public function desabinaan()
	{
		$data = [
			'title' => 'Desa Binaan | merdekabelajar'
		];
		return view('pages.desabinaan', $data);
	}

	public function insentif()
	{
		$data = [
			'title' => 'Insentif ITB | merdekabelajar'
		];
		return view('pages.insentif', $data);
	}

	public function mitigasibencana()
	{
		$data = [
			'title' => 'Mitigasi Bencana | merdekabelajar'
		];
		return view('pages.mitigasibencana', $data);
	}

	public function citarumharum()
	{
		$data = [
			'title' => 'Citarum Harum | merdekabelajar'
		];
		return view('pages.citarumharum', $data);
	}

	public function programkerjasama()
	{
		$data = [
			'title' => 'Kerjasama | merdekabelajar'
		];
		return view('pages.programkerjasama', $data);
	}
}
