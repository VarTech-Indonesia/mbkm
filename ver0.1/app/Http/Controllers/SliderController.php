<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']  = "Data Slider";
        $data['data']   = Slider::orderByDesc('updated_at')->get();
        return view('admin/slider/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']  = "Add Data Slider";
        return view('admin/slider/form', $data);
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
            'title'             => 'required',
            'image'             => 'image|mimes:png,jpg,jpeg|max:10240',
            'status'            => 'required',
        ];

        $messages = [
            'title.required'    => 'Judul Wajib Diisi',
            'image.image'       => 'Gambar Wajib  di Isi dengan Image Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.mimes'       => 'Gambar Wajib  dengan Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.max'         => 'Gambar Max. 10 Mb',
            'status.required'   => 'Status Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        // Image
        $image              = $request->file('image');
        if ($image == null) {
            $uploadedFile   = "";
        } else {
            // Ganti Nama Image
            $title          = strtolower(str_replace(' ', '-', $request->title));
            $image          = $request->file('image');
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $title  . '-' . '.' . $getFileExt;
            // Upload Image
            $image->storeAs('public/images-slider', $uploadedFile);
            // Save Image di DB
            $uploadedFile   = 'images-slider/' . $uploadedFile;
        }
        $query  = Slider::create([
            'title'     => $request->title,
            'link'      => $request->link,
            'image'     => $uploadedFile,
            'status'    => $request->status
        ]);
        if ($query) {
            return redirect()->route('slider.index')->with('success', 'Data Berhasil Disimpan');
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
        $data['title']  = "Edit Data Slider";
        $data['item']   = Slider::where('id', $id)->first();
        return view('admin/Slider/edit', $data);
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
            'title'             => 'required',
            'image'             => 'image|mimes:png,jpg,jpeg|max:10240',
            'status'            => 'required',
        ];

        $messages = [
            'title.required'    => 'Judul Wajib Diisi',
            'image.image'       => 'Gambar Wajib  di Isi dengan Image Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.mimes'       => 'Gambar Wajib  dengan Format : JPEG, JPG, PNG Max. 10 Mb',
            'image.max'         => 'Gambar Max. 10 Mb',
            'status.required'   => 'Status Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        // Image
        $image              = $request->file('image');
        if ($image == null) {
            $uploadedFile   = $request->image_hidden;
        } else {
            // Ganti Nama Image
            $title          = strtolower(str_replace(' ', '-', $request->title));
            $image          = $request->file('image');
            $ImgValue       = $request->file('image');
            $getFileExt     = $ImgValue->getClientOriginalExtension();
            $uploadedFile   = $title  . '-' . '.' . $getFileExt;
            // Delete Image
            if (Storage::exists('public/' . $request->image_hidden)) {
                // dd('image found');
                Storage::delete('public/' . $request->image_hidden);
            } else {
                // dd('image not found');
                return redirect()->back()->with('error', 'Data Gagal Disimpan, Hubungi Admin');
            }
            // Upload Image
            $image->storeAs('public/images-slider', $uploadedFile);
            // Save Image di DB
            $uploadedFile   = 'images-slider/' . $uploadedFile;
        }
        $query  = Slider::whereId($id)->update([
            'title'     => $request->title,
            'link'      => $request->link,
            'image'     => $uploadedFile,
            'status'    => $request->status
        ]);
        if ($query) {
            return redirect()->route('slider.index')->with('success', 'Data Berhasil Disimpan');
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
