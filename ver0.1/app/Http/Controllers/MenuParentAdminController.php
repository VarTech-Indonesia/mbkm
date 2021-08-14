<?php

namespace App\Http\Controllers;

use App\Models\MenuParentAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MenuParentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']  = "Data Menu Parent";
        $data['data']   = MenuParentAdmin::orderByDesc('updated_at')->get();
        return view('admin/menu-parent/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']  = "Add Data Menu Parent";
        return view('admin/menu-parent/form', $data);
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
            'title'                 => 'required',
        ];

        $messages = [
            'title.required'         => 'Nama Menu Parent Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query  = MenuParentAdmin::create([
            'title'     => $request->title,
            'link'      => $request->link,
            'status'    => $request->status
        ]);
        if ($query) {
            return redirect()->route('menu-parent.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuAdmin  $menuAtas
     * @return \Illuminate\Http\Response
     */
    public function show(MenuParentAdmin $menuAtas)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuParentAdmin  $menuAtas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // DB::enableQueryLog();
        $data['title']  = "Edit Data Menu Parent";
        $data['item']   = MenuParentAdmin::where('id', $id)->first();
        // dd(DB::getQueryLog());
        // dd($data['data']);
        return view('admin/menu-parent/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuParentAdmin  $menuAtas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title'                 => 'required',
        ];

        $messages = [
            'title.required'         => 'Nama Menu Parent Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query    = MenuParentAdmin::whereId($id)->update([
            'title'     => $request->title,
            'link'      => $request->link,
            'status'    => $request->status
        ]);
        if ($query) {
            return redirect()->route('menu-parent.index')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuParentAdmin  $menuAtas
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuParentAdmin $menuAtas)
    {
        //
    }
}
