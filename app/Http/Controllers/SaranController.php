<?php

namespace App\Http\Controllers;

use DB;
use Exception;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    //
    public function saran()
    {
        return view('saran.form');
    }
    public function success()
    {
        return view('saran.congrat');
    }
    public function get_api(Request $req)
    {

        $validatedData = $req->validate([
            'username' => 'required',
            'password' => 'required',

        ]);

        try {
            // Validate the value...
            $client = new \GuzzleHttp\Client();
            $request = $client->post(
                'https://api.primakara.ac.id/user/login',
                array(
                    'form_params' => array(
                        'username' => $req->input('username'),
                        'password' => $req->input('password'),
                    ),
                )
            );
            $response = $request->getBody();
            $clientes = json_decode($response, true);
            $username = $clientes['data']['username'];
            $req->session()->put('username', $username);
            return redirect('/saran');
        } catch (Exception $e) {
            return view('saran.login', ['result' => 'User Tidak Ditemukan']);
        }

    }
    public function insert_saran(Request $req)
    {
        $validatedData = $req->validate([
            'pesan' => 'required',
            'tujuan' => 'required',
            'nama_tujuan' => 'required',
        ]);
        DB::table('saran')->insert([
            'pesan' => $req->input('pesan'),
            'user' => $req->session()->get('username'),
            'tujuan' => $req->input('tujuan'),
            'nama_tujuan' => $req->input('nama_tujuan'),

        ]);
        return redirect('/success');
    }
    public function admin()
    {

        $saran = DB::table('saran')->get();

        return view('saran.data', ['saran' => $saran]);
    }
    public function login_admin()
    {
        return view('saran.login_admin');
    }
    public function login_check(Request $req)
    {
        $validatedData = $req->validate([
            'username' => 'required',
            'password' => 'required',

        ]);

        $username = $req->input('username');
        $password = $req->input('password');
        if ($username == 'admin' && $password == 'HRD') {
            $req->session()->put('user', 'admin');
            return redirect('/data');
        } else {
            return view('saran.login_admin', ['result' => 'User Tidak Ditemukan']);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('username');
        return redirect('/');
    }

}
