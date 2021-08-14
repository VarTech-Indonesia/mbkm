<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\PostCategories;

class PostCategoriesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']  = "Data Category";
        $data['data']   = PostCategories::orderByDesc('updated_at')->get();
        return view('admin/post-categories/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']  = "Add Data Category";
        return view('admin/post-categories/form', $data);
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
            'category'              => 'required',
        ];

        $messages = [
            'category.required'     => 'Category Wajib Diisi',
        ];
        $validator  = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query      = PostCategories::create([
            'category'  => $request->category,
        ]);
        if ($query) {
            return redirect()->route('post-categories.index')->with('success', 'Data Berhasil Disimpan');
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
        $data['title']  = "Edit Data Category";
        $data['item']   = PostCategories::where('id', $id)->first();
        return view('admin/post-categories/edit', $data);
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
            'category'              => 'required',
        ];

        $messages = [
            'category.required'     => 'Category Wajib Diisi',
        ];
        $validator  = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query      = PostCategories::whereId($id)->update([
            'category'  => $request->category,
        ]);
        if ($query) {
            return redirect()->route('post-categories.index')->with('success', 'Data Berhasil Disimpan');
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
