<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\MenuOneChildAdmin;
use App\Models\MenuParentAdmin;

class MenuOneChildAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']  = "Data Menu Tengah";
        $data['data']   = MenuOneChildAdmin::with('menuParent')->orderBy('updated_at')->get();
        return view('admin/menu-one-child/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']              = "Add Data Menu Tengah";
        $data['MenuParentAdmin']    = MenuParentAdmin::orderBy('title')->get();
        return view('admin/menu-one-child/form', $data);
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
            'id_menu_parent'        => 'required',
            'title'                 => 'required',
        ];

        $messages = [
            'id_menu_parent.required'   => 'Nama Menu Parent Wajib Diisi',
            'title.required'         => 'Nama Menu Tengah Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query  = MenuOneChildAdmin::create([
            'id_menu_parent'    => $request->id_menu_parent,
            'title'     => $request->title,
            'link'      => $request->link,
            'status'    => $request->status
        ]);
        if ($query) {
            return redirect()->route('menu-one-child.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuOneChildAdmin  $menuOneChild
     * @return \Illuminate\Http\Response
     */
    public function show(MenuOneChildAdmin $MenuOneChildAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuOneChildAdmin  $menuOneChild
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title']  = "Edit Data Menu Tengah";
        $data['MenuParentAdmin']    = MenuParentAdmin::orderBy('title')->get();
        $data['item']   = MenuOneChildAdmin::where('id', $id)->first();
        return view('admin/menu-one-child/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuOneChildAdminController  $menuOneChild
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'id_menu_parent'        => 'required',
            'title'                 => 'required',
        ];

        $messages = [
            'id_menu_parent.required'   => 'Nama Menu Parent Wajib Diisi',
            'title.required'         => 'Nama Menu Tengah Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query    = MenuOneChildAdmin::whereId($id)->update([
            'id_menu_parent'    => $request->id_menu_parent,
            'title'     => $request->title,
            'link'      => $request->link,
            'status'    => $request->status
        ]);
        if ($query) {
            return redirect()->route('menu-one-child.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuOneChildAdminController  $menuOneChild
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuOneChildAdminController $MenuOneChildAdminController)
    {
        //
    }
}
