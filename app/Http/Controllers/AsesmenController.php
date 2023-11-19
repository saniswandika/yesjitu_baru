<?php

namespace App\Http\Controllers;

use App\Models\AsesmenAspekAkademis;
use App\Models\AsesmenBiodataPpks;
use App\Models\AsesmenDataKeluarga;
use App\Models\AsesmenDiagnosaLayananIntervensi;
use App\Models\AsesmenKepemilikanAdminduk;
use App\Models\AsesmenKondisiBiologis;
use App\Models\AsesmenKondisiEkonomi;
use App\Models\AsesmenKondisiSosial;
use App\Models\AsesmenRiwayatBantuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AsesmenPpks;

class AsesmenController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      //
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      //
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      try {
         $allRequest = $request->all();

         $asesmenPPKS = array_splice($allRequest, 1, 6);
         $asesmenPPKS['user_id'] = Auth::id();
         $asesmenPPKSSaved = AsesmenPpks::create($asesmenPPKS);


         $asesmenBiodataPPKS = array_splice($allRequest, 1, 39);
         $asesmenBiodataPPKS['id_asesmen_ppks'] = $asesmenPPKSSaved['id'];
         $asesmenBiodataPPKSSaved = AsesmenBiodataPpks::create($asesmenBiodataPPKS);


         $asesmenKepemilikanAdminduk = array_splice($allRequest, 1, 8);
         $asesmenKepemilikanAdminduk['id_asesmen_ppks'] = $asesmenPPKSSaved['id'];
         $asesmenKepemilikanAdmindukSaved = AsesmenKepemilikanAdminduk::create($asesmenKepemilikanAdminduk);


         $asesmenRiwayatBantuan = array_splice($allRequest, 1, 9);
         $asesmenRiwayatBantuan['id_asesmen_ppks'] = $asesmenPPKSSaved['id'];
         $asesmenRiwayatBantuanSaved = AsesmenRiwayatBantuan::create($asesmenRiwayatBantuan);


         $asesmenKondisiBiologis = array_splice($allRequest, 1, 5);
         $asesmenKondisiBiologis['id_asesmen_ppks'] = $asesmenPPKSSaved['id'];
         $asesmenRiwayatBantuanSaved = AsesmenKondisiBiologis::create($asesmenKondisiBiologis);


         $asesmenKondisiSosial = array_splice($allRequest, 1, 10);
         $asesmenKondisiSosial['id_asesmen_ppks'] = $asesmenPPKSSaved['id'];
         $asesmenRiwayatBantuanSaved = AsesmenKondisiSosial::create($asesmenKondisiSosial);


         $asesmenAspekAkademis = array_splice($allRequest, 1, 9);
         $asesmenAspekAkademis['id_asesmen_ppks'] = $asesmenPPKSSaved['id'];
         $asesmenRiwayatBantuanSaved = AsesmenAspekAkademis::create($asesmenAspekAkademis);


         $asesmenKondisiEkonomi = array_splice($allRequest, 1, 46);
         $asesmenKondisiEkonomi['id_asesmen_ppks'] = $asesmenPPKSSaved['id'];
         $asesmenRiwayatBantuanSaved = AsesmenKondisiEkonomi::create($asesmenKondisiEkonomi);



         $asesmenDataKeluarga = array_splice($allRequest, 1, 40);

         $fotoPPKS = $request->file('foto_ppks');
         $fotoKTPPPKS = $request->file('foto_ktp_ppks');
         $fotoRumahTampakDepan = $request->file('foto_rumah_tampak_depan');
         $fotoRumahTampakDalam = $request->file('foto_rumah_tampak_dalam');
         $fotoHomeVisit = $request->file('foto_home_visit');

         $asesmenDataKeluarga['id_asesmen_ppks'] = $asesmenPPKSSaved['id'];
         $asesmenRiwayatBantuanSaved = AsesmenDataKeluarga::create($asesmenDataKeluarga);


         $asesmenDiagnosaLayananIntervensi = array_splice($allRequest, 1, 11);

         $now = date("YmdHis");

         $fotoPPKS->move(public_path('/foto_ppks'), $now . $fotoPPKS->getClientOriginalName());
         $fotoKTPPPKS->move(public_path('/foto_ktp_ppks'), $now . $fotoKTPPPKS->getClientOriginalName());
         $fotoRumahTampakDepan->move(public_path('/foto_rumah_tampak_depan'), $now . $fotoRumahTampakDepan->getClientOriginalName());
         $fotoRumahTampakDalam->move(public_path('/foto_rumah_tampak_dalam'), $now . $fotoRumahTampakDalam->getClientOriginalName());
         $fotoHomeVisit->move(public_path('/foto_home_visit'), $now . $fotoHomeVisit->getClientOriginalName());

         $asesmenDiagnosaLayananIntervensi['foto_ppks'] = $now . $fotoPPKS->getClientOriginalName();
         $asesmenDiagnosaLayananIntervensi['foto_ktp_ppks'] = $now . $fotoKTPPPKS->getClientOriginalName();
         $asesmenDiagnosaLayananIntervensi['foto_rumah_tampak_depan'] = $now . $fotoRumahTampakDepan->getClientOriginalName();
         $asesmenDiagnosaLayananIntervensi['foto_rumah_tampak_dalam'] = $now . $fotoRumahTampakDalam->getClientOriginalName();
         $asesmenDiagnosaLayananIntervensi['foto_home_visit'] = $now . $fotoHomeVisit->getClientOriginalName();
         $asesmenDiagnosaLayananIntervensi['id_asesmen_ppks'] = $asesmenPPKSSaved['id'];
         $asesmenRiwayatBantuanSaved = AsesmenDiagnosaLayananIntervensi::create($asesmenDiagnosaLayananIntervensi);

         // return response()->json([
         //    "code" => 200,
         //    "status" => "OK",
         //    "data" => [
         //       "message" => "Data Berhasil Disimpan!"
         //    ]
         // ]);
         return redirect('/home');
      } catch (\Exception $e) {

         return response()->json([
            "code" => 400,
            "status" => "OK",
            "errors" => [
               "message" => $e->getMessage()
            ]
         ]);
      }

   }

   /**
    * Display the specified resource.
    */
   public function show(string $id)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(string $id)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, string $id)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {
      //
   }
}
