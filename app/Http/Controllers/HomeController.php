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
        $data['info']                   = Post::where('id_category', '2')->where('status', 'Published')->get();
        $data['berita']                 = Post::where('id_category', '1')->where('status', 'Published')->get();
        $data['video']                  = Video::where('status', 'Enable')->get();
        $data['slider']                 = Slider::where('status', 'Published')->get();

        $data['menu_kemendikbud']       = MenuOneChildAdmin::where('id_menu_parent', 2)->where('status', 'Enable')->get();
        $data['menu_sub_kemendikbud']   = Page::where('id_menu_parent', 2)->where('id_menu_one_child', 2)->where('status', 'Published')->get();

        $data['menu_itb']               = MenuOneChildAdmin::where('id_menu_parent', 3)->where('status', 'Enable')->get();

        $data['data']                   = Page::where('id_menu_parent', 1)->where('status', 'Published')->firstOrFail();
        return view('pages.home', $data);
    }

    public function show($id, $url)
    {
        $url     = str_replace('-', ' ', strtoupper($url));
        $data     = [
            'title' => '' . $url . '' . ' | Merdeka Belajar ITB'
        ];
        $data['info']                   = Post::where('id_category', '2')->where('status', 'Published')->get();
        $data['berita']                 = Post::where('id_category', '1')->where('status', 'Published')->get();
        $data['video']                  = Video::where('status', 'Enable')->get();
        $data['slider']                 = Slider::where('status', 'Published')->get();

        $data['menu_kemendikbud']       = MenuOneChildAdmin::where('id_menu_parent', 2)->where('status', 'Enable')->get();
        $data['menu_sub_kemendikbud']   = Page::where('id_menu_parent', 2)->where('id_menu_one_child', 2)->where('status', 'Published')->get();

        $data['menu_itb']               = MenuOneChildAdmin::where('id_menu_parent', 3)->where('status', 'Enable')->get();

        $data['data']                   = Page::where('id', $id)->where('status', 'Published')->firstOrFail();
        return view('pages.show', $data);
    }

    public function berita()
    {
        $data = [
            'title' => 'Berita | Merdeka Belajar ITB'
        ];
        $data['info']                   = Post::where('id_category', '2')->where('status', 'Published')->get();
        $data['berita']                 = Post::where('id_category', '1')->where('status', 'Published')->get();
        $data['video']                  = Video::where('status', 'Enable')->get();
        $data['slider']                 = Slider::where('status', 'Published')->get();

        $data['menu_kemendikbud']       = MenuOneChildAdmin::where('id_menu_parent', 2)->where('status', 'Enable')->get();
        $data['menu_sub_kemendikbud']   = Page::where('id_menu_parent', 2)->where('id_menu_one_child', 2)->where('status', 'Published')->get();

        $data['menu_itb']               = MenuOneChildAdmin::where('id_menu_parent', 3)->where('status', 'Enable')->get();

        $data['data']                   = Post::where('id_category', '1')->where('status', 'Published')->get();
        return view('pages.berita', $data);
    }

    public function info()
    {
        $data = [
            'title' => 'Info | Merdeka Belajar ITB'
        ];
        $data['info']                   = Post::where('id_category', '2')->where('status', 'Published')->get();
        $data['berita']                 = Post::where('id_category', '1')->where('status', 'Published')->get();
        $data['video']                  = Video::where('status', 'Enable')->get();
        $data['slider']                 = Slider::where('status', 'Published')->get();

        $data['menu_kemendikbud']       = MenuOneChildAdmin::where('id_menu_parent', 2)->where('status', 'Enable')->get();
        $data['menu_sub_kemendikbud']   = Page::where('id_menu_parent', 2)->where('id_menu_one_child', 2)->where('status', 'Published')->get();

        $data['menu_itb']               = MenuOneChildAdmin::where('id_menu_parent', 3)->where('status', 'Enable')->get();

        $data['data']                   = Post::where('id_category', '2')->where('status', 'Published')->get();
        return view('pages.info', $data);
    }

    public function video()
    {
        $data = [
            'title' => 'Video | Merdeka Belajar ITB'
        ];
        $data['info']                   = Post::where('id_category', '2')->where('status', 'Published')->get();
        $data['berita']                 = Post::where('id_category', '1')->where('status', 'Published')->get();
        $data['video']                  = Video::where('status', 'Enable')->get();
        $data['slider']                 = Slider::where('status', 'Published')->get();

        $data['menu_kemendikbud']       = MenuOneChildAdmin::where('id_menu_parent', 2)->where('status', 'Enable')->get();
        $data['menu_sub_kemendikbud']   = Page::where('id_menu_parent', 2)->where('id_menu_one_child', 2)->where('status', 'Published')->get();

        $data['menu_itb']               = MenuOneChildAdmin::where('id_menu_parent', 3)->where('status', 'Enable')->get();

        $data['data']                   = Post::where('id_category', '2')->where('status', 'Published')->get();
        return view('pages.video', $data);
    }
}
