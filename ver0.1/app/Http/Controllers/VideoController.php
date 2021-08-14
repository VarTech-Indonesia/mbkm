<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']  = "Data Video";
        $data['data']   = Video::orderByDesc('updated_at')->get();
        return view('admin/video/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']  = "Add Data Video";
        return view('admin/video/form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggal_berita      = date('Y-m-d H:i:s', strtotime($request->tanggal_berita));
        $rules = [
            'link'              => 'required',
            'tanggal_berita'    => 'required',
            'status'            => 'required',
        ];

        $messages = [
            'link.required'             => 'Link Wajib Diisi',
            'tanggal_berita.required'   => 'Tanggal Berita Wajib Diisi',
            'status.required'           => 'Status Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query  = Video::create([
            'link'              => $request->link,
            'tanggal_berita'    => $tanggal_berita,
            'status'            => $request->status
        ]);
        if ($query) {
            return redirect()->route('video.index')->with('success', 'Data Berhasil Disimpan');
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
        $data['title']  = "Edit Data Video";
        $data['item']   = Video::where('id', $id)->first();
        return view('admin/video/edit', $data);
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
        $tanggal_berita      = date('Y-m-d H:i:s', strtotime($request->tanggal_berita));
        $rules = [
            'link'              => 'required',
            'tanggal_berita'    => 'required',
            'status'            => 'required',
        ];

        $messages = [
            'link.required'             => 'Link Wajib Diisi',
            'tanggal_berita.required'   => 'Tanggal Berita Wajib Diisi',
            'status.required'           => 'Status Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query    = Video::whereId($id)->update([
            'link'              => $request->link,
            'tanggal_berita'    => $tanggal_berita,
            'status'            => $request->status
        ]);
        if ($query) {
            return redirect()->route('video.index')->with('success', 'Data Berhasil Disimpan');
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
