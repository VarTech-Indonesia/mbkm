<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\MenuParentAdmin;
use App\Models\MenuTwoChildAdmin;
use App\Models\MenuOneChildAdmin;

class MenuTwoChildAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']  = "Data Menu Bawah";
        $data['data']   = MenuTwoChildAdmin::with('menuParent', 'menuOneChild')->orderByDesc('updated_at')->get();
        return view('admin/menu-two-child/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']              = "Add Data Menu Bawah";
        $data['MenuParentAdmin']    = MenuParentAdmin::orderBy('title')->get();
        $data['MenuOneChildAdmin']  = MenuOneChildAdmin::orderBy('title')->get();
        return view('admin/menu-two-child/form', $data);
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
            'id_menu_one_child'     => 'required',
            'title'                 => 'required',
        ];

        $messages = [
            'id_menu_parent.required'   => 'Nama Menu Parent Wajib Diisi',
            'id_menu_one_child.required' => 'Nama Menu Parent Wajib Diisi',
            'title.required'         => 'Nama Menu Tengah Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query  = MenuTwoChildAdmin::create([
            'id_menu_parent'    => $request->id_menu_parent,
            'id_menu_one_child' => $request->id_menu_one_child,
            'title'     => $request->title,
            'link'      => $request->link,
            'status'    => $request->status
        ]);
        if ($query) {
            return redirect()->route('menu-two-child.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuTwoChildAdmin  $menuTwoChildAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(MenuTwoChildAdmin $menuTwoChildAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuTwoChildAdmin  $menuTwoChildAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title']              = "Edit Data Menu Bawah";
        $data['MenuParentAdmin']    = MenuParentAdmin::orderBy('title')->get();
        $data['MenuOneChildAdmin']  = MenuOneChildAdmin::orderBy('title')->get();
        $data['item']   = MenuTwoChildAdmin::where('id', $id)->first();
        return view('admin/menu-two-child/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuTwoChildAdmin  $menuTwoChildAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'id_menu_parent'        => 'required',
            'id_menu_one_child'     => 'required',
            'title'                 => 'required',
        ];

        $messages = [
            'id_menu_parent.required'   => 'Nama Menu Parent Wajib Diisi',
            'id_menu_one_child.required' => 'Nama Menu Parent Wajib Diisi',
            'title.required'         => 'Nama Menu Tengah Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query    = MenuTwoChildAdmin::whereId($id)->update([
            'id_menu_parent'    => $request->id_menu_parent,
            'id_menu_one_child' => $request->id_menu_one_child,
            'title'     => $request->title,
            'link'      => $request->link,
            'status'    => $request->status
        ]);
        if ($query) {
            return redirect()->route('menu-two-child.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuTwoChildAdmin  $menuTwoChildAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuTwoChildAdmin $menuTwoChildAdmin)
    {
        //
    }
}
