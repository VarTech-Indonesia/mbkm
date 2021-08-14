<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use App\Models\MenuParentAdmin;
use App\Models\MenuOneChildAdmin;
use App\Models\MenuTwoChildAdmin;
use App\Models\Page;

class PageAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']  = "Data Page";
        $data['data']   = Page::with('menuParents', 'menuOneChild', 'menuTwoChild', 'users')->orderByDesc('updated_at')->get();
        return view('admin/page/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']       = "Add Data Page";
        $data['menuParents']    = MenuParentAdmin::where('status', 'Enable')->orderBy('title')->get();
        $data['menuOneChild']   = MenuOneChildAdmin::where('status', 'Enable')->orderBy('title')->get();
        $data['menuTwoChild']   = MenuTwoChildAdmin::where('status', 'Enable')->orderBy('title')->get();
        return view('admin/page/form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id_menu_parent'    => 'required',
            'title'         => 'required',
            'excerpt'       => 'required',
            'body'          => 'required',
            'image'         => 'image|mimes:png,jpg,jpeg|max:10240',
            'status'        => 'required',
        ];
        $messages = [
            'id_menu_parent.required'       => 'Menu Parent Wajib Diisi',
            'title.required'        => 'Judul Wajib Diisi',
            'excerpt.required'      => 'Deskripsi Singkat Wajib Diisi',
            'body.required'         => 'Deksripsi Wajib Diisi',
            'image.image'           => 'Gambar Wajib  di Isi dengan Image Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.mimes'           => 'Gambar Wajib  dengan Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.max'             => 'Gambar Max. 10 Mb',
            'status.required'       => 'Status Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $id_author  = Auth::user()->id;
        $slug       = strtolower(str_replace(' ', '-', $request->title));
        $seo_title  = "merdeka-belajar-itb-" . strtolower(str_replace(' ', '-', $request->title));

        // Image
        $image              = $request->file('image');
        if ($image == null) {
            $uploadedFile   = "";
        } else {
            // Ganti Nama Image
            $image          = $request->file('image');
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $slug . '-' . '.' . $getFileExt;
            // Upload Image
            $image->storeAs('public/images-page', $uploadedFile);
            // Save Image di DB
            $uploadedFile   = 'images-page/' . $uploadedFile;
        }

        $query  = Page::create([
            'id_author'          => $id_author,
            'id_menu_parent'     => $request->id_menu_parent,
            'id_menu_one_child'  => $request->id_menu_one_child,
            'id_menu_two_child'  => $request->id_menu_two_child,
            'title'              => $request->title,
            'excerpt'            => $request->excerpt,
            'body'               => $request->body,
            'link_1'             => $request->link_1,
            'link_2'             => $request->link_2,
            'image'              => $uploadedFile,
            'status'             => $request->status,
            'slug'               => $slug,
            'seo_title'          => $seo_title,
            'meta_keywords'      => $request->meta_keywords,
            'meta_description'   => $request->meta_description
        ]);
        if ($query) {
            return redirect()->route('page.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title']      = "Edit Data Page";
        $data['menuParents']    = MenuParentAdmin::where('status', 'Enable')->orderBy('title')->get();
        $data['menuOneChild']   = MenuOneChildAdmin::where('status', 'Enable')->orderBy('title')->get();
        $data['menuTwoChild']   = MenuTwoChildAdmin::where('status', 'Enable')->orderBy('title')->get();
        $data['item']       = Page::where('id', $id)->first();
        return view('admin/page/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = [
            'id_menu_parent'    => 'required',
            'title'         => 'required',
            'excerpt'       => 'required',
            'body'          => 'required',
            'image'         => 'image|mimes:png,jpg,jpeg|max:10240',
            'status'        => 'required',
        ];
        $messages = [
            'id_menu_parent.required'       => 'Menu Parent Wajib Diisi',
            'title.required'        => 'Judul Wajib Diisi',
            'excerpt.required'      => 'Deskripsi Singkat Wajib Diisi',
            'body.required'         => 'Deksripsi Wajib Diisi',
            'image.image'           => 'Gambar Wajib  di Isi dengan Image Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.mimes'           => 'Gambar Wajib  dengan Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.max'             => 'Gambar Max. 10 Mb',
            'status.required'       => 'Status Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $id_author  = Auth::user()->id;
        $slug       = strtolower(str_replace(' ', '-', $request->title));
        $seo_title  = "merdeka-belajar-itb-" . strtolower(str_replace(' ', '-', $request->title));

        // Image
        $image              = $request->file('image');
        if ($image == null) {
            $uploadedFile   = $request->image_hidden;
        } else {
            // Ganti Nama Image
            $image          = $request->file('image');
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $slug . '-' . '.' . $getFileExt;
            // Delete Image
            if (Storage::exists('public/' . $request->image_hidden)) {
                // dd('image found');
                Storage::delete('public/' . $request->image_hidden);
            } else {
                // dd('image not found');
                return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
            }
            // Storage::delete('public/'. $request->image_hidden);
            // Upload Image
            $image->storeAs('public/images-page', $uploadedFile);
            // Save Image di DB
            $uploadedFile   = 'images-page/' . $uploadedFile;
        }

        $query  = Page::whereId($id)->update([
            'id_author'          => $id_author,
            'id_menu_parent'     => $request->id_menu_parent,
            'id_menu_one_child'  => $request->id_menu_one_child,
            'id_menu_two_child'  => $request->id_menu_two_child,
            'title'              => $request->title,
            'excerpt'            => $request->excerpt,
            'body'               => $request->body,
            'link_1'             => $request->link_1,
            'link_2'             => $request->link_2,
            'image'              => $uploadedFile,
            'status'             => $request->status,
            'slug'               => $slug,
            'seo_title'          => $seo_title,
            'meta_keywords'      => $request->meta_keywords,
            'meta_description'   => $request->meta_description
        ]);
        if ($query) {
            return redirect()->route('page.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
