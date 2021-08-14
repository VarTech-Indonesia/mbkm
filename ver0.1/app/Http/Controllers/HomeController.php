<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\MenuParentAdmin;
use App\Models\MenuOneChildAdmin;
use App\Models\MenuTwoChildAdmin;

use App\Models\Home;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Post;
use App\Models\Video;

class HomeController extends Controller
{

	public function index()
	{
		$data = [
			'title' => 'Home | Merdeka Belajar ITB'
		];
		$data['info']				= Post::where('id_category', '2')->where('status', 'Published')->get();
		$data['berita']				= Post::where('id_category', '1')->where('status', 'Published')->get();
		$data['video']				= Video::where('status', 'Enable')->get();
		$data['slider']				= Slider::where('status', 'Published')->get();

		$data['menu_kemendikbud']	= MenuOneChildAdmin::where('id_menu_parent', 2)->where('status', 'Enable')->get();
		$data['menu_itb']			= MenuOneChildAdmin::where('id_menu_parent', 3)->where('status', 'Enable')->get();

		$data['data']				= Page::where('id_menu_parent', 1)->where('status', 'Published')->firstOrFail();
		return view('pages.home', $data);
	}

	public function show($id, $url)
	{
		$url 	= str_replace('-', ' ', strtoupper($url));
		$data 	= [
			'title' => '' . $url . '' . ' | Merdeka Belajar ITB'
		];
		$data['info']				= Post::where('id_category', '2')->where('status', 'Published')->get();
		$data['berita']				= Post::where('id_category', '1')->where('status', 'Published')->get();
		$data['video']				= Video::where('status', 'Enable')->get();
		$data['slider']				= Slider::where('status', 'Published')->get();

		$data['menu_kemendikbud']	= Page::where('id_menu_parent', 2)->where('status', 'Published')->get();
		$data['menu_itb']			= Page::where('id_menu_parent', 3)->where('status', 'Published')->get();
		$data['data']				= Page::where('id', $id)->where('status', 'Published')->firstOrFail();
		return view('pages.show', $data);
	}

	public function berita()
	{
		// $data = [
		// 	'title' => 'Berita | Merdeka Belajar ITB'
		// ];
		// $data['info']				= Post::where('category_id', '2')->where('status', 'PUBLISHED')->get();
		// $data['berita']				= Post::where('category_id', '1')->where('status', 'PUBLISHED')->get();
		// $data['video']				= Video::where('status', 'PUBLISHED')->where('status', 'PUBLISHED')->get();
		// $data['slider_main']		= Slider::where('status', 'PUBLISHED')->get();
		// $data['menu_kemendikbud']	= Page::where('menu_parent', 'MBKM KEMENDIKBUD')->where('status', 'ACTIVE')->get();
		// $data['menu_itb']			= Page::where('menu_parent', 'MBKM ITB')->where('status', 'ACTIVE')->get();
		// $data['data']				= Page::where('menu_parent', 'BERANDA')->where('status', 'ACTIVE')->firstOrFail();
		// return view('pages.berita', $data);
	}

	public function info()
	{
		// 	$data = [
		// 		'title' => 'Info | Merdeka Belajar ITB'
		// 	];
		// 	$data['info']				= Post::where('category_id', '2')->where('status', 'PUBLISHED')->get();
		// 	$data['berita']				= Post::where('category_id', '1')->where('status', 'PUBLISHED')->get();
		// 	$data['video']				= Video::where('status', 'PUBLISHED')->where('status', 'PUBLISHED')->get();
		// 	$data['slider_main']		= Slider::where('status', 'PUBLISHED')->get();
		// 	$data['menu_kemendikbud']	= Page::where('menu_parent', 'MBKM KEMENDIKBUD')->where('status', 'ACTIVE')->get();
		// 	$data['menu_itb']			= Page::where('menu_parent', 'MBKM ITB')->where('status', 'ACTIVE')->get();
		// 	$data['data']				= Page::where('menu_parent', 'BERANDA')->where('status', 'ACTIVE')->firstOrFail();
		// 	return view('pages.info', $data);
	}

	public function video()
	{
		// $data = [
		// 	'title' => 'Info | Merdeka Belajar ITB'
		// ];
		// $data['info']				= Post::where('category_id', '2')->where('status', 'PUBLISHED')->get();
		// $data['berita']				= Post::where('category_id', '1')->where('status', 'PUBLISHED')->get();
		// $data['video']				= Video::where('status', 'PUBLISHED')->where('status', 'PUBLISHED')->get();
		// $data['slider_main']		= Slider::where('status', 'PUBLISHED')->get();
		// $data['menu_kemendikbud']	= Page::where('menu_parent', 'MBKM KEMENDIKBUD')->where('status', 'ACTIVE')->get();
		// $data['menu_itb']			= Page::where('menu_parent', 'MBKM ITB')->where('status', 'ACTIVE')->get();
		// $data['data']				= Page::where('menu_parent', 'BERANDA')->where('status', 'ACTIVE')->firstOrFail();
		// return view('pages.info', $data);
	}
}
