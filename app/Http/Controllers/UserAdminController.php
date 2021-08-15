<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\hash;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']  ="Data User";
        $data['data']   = User::with('role')->get();
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']  ="Add Data User";
        $data['role']   = Role::orderBy('name')->get();
        return view('admin.user.form', $data);
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
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed',
        ];
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan Re-Type Password'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $query  = User::create([
            'role_id'           => $request->role_id,
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
            'status'            => $request->status
        ]);
        if ($query) {
            return redirect()->route('user-admin.index')->with('success', 'Data Berhasil Disimpan');
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
        $data['title']  ="Edit Data User";
        $data['role']   = Role::orderby('name')->get();
        $data['data']   = User::where('id', $id)->first();
        return view('admin.user.edit', $data);
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
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email',
        ];
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
        ];
        
        $validator  = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user       = User::find($id);
        if ( ($request->email) != ($user->email))  {
            if ( User::where('email',$request->email)->exists() ) {
                return redirect()->back()->with('error', 'Email sudah terdaftar');
            } else {
                $newEmail   =$request->email;
            }
        } 
        else  {
            $newEmail       =$request->email;
        }

        if ( ($request->password) !="" ) {
                if( ($request->password) != ($request->password_confirmation) ) {
                    return redirect()->back()->with('error', 'Password tidak sama dengan Re-Type Password');
                } else {
                    $newPassword    =Hash::make($request->password);
                }
        }

        if ( (($request->password) && ($request->password_confirmation)) != "" ) {
            if( ($request->password) != ($request->password_confirmation) ) {
                return redirect()->back()->with('error', 'Password tidak sama dengan Re-Type Password');
            } else {
                $newPassword    =Hash::make($request->password);
            }
        } else {
            $newPassword    =$request->hidden_password;
        }

        $query  = User::where('id',$id)->update([
            'role_id'           => $request->role_id,
            'name'              => $request->name,
            'email'             => $newEmail,
            'password'          => $newPassword,
            'status'            => $request->status
        ]);
        if ($query) {
            return redirect()->route('user-admin.index')->with('success', 'Data Berhasil Disimpan');
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
