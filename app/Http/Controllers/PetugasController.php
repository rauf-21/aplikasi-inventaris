<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\Level;

class PetugasController extends Controller
{
  public function login (Request $request)
  {
    $request->validate([
      'username' => 'required|max:25',
      'password' => 'required|max:25'
    ]);

    $matched_petugas = Petugas::whereRaw(
      'BINARY username = ?', 
      $request->username
    )->first();

    if ($matched_petugas === null) {
      return redirect()
        ->route('home', '#login')
        ->withErrors(['username' => 'Username tidak ditemukan!']);
    }

    if ($matched_petugas->password !== $request->password) {
      return redirect()
        ->route('home', '#login')
        ->withErrors(['password' => 'Password salah!']);
    }

    $level_petugas = Level::where(
      'id_level', 
      $matched_petugas->id_level
    )->first()['nama_level'];        

    $request->session()->put('login', true);
    $request->session()->put('petugas', [
      'username' => $request->username,
      'level' => $level_petugas
    ]);

    return redirect()->route("$level_petugas.dashboard");
  }

  public function logout (Request $request)
  {
    $request->session()->forget(['login', 'petugas']);

    $request->session()->flush();

    return redirect()->route('home');
  }
}