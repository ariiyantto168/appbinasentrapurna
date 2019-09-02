<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asuransis;
use SoftDeletes;


class AsuransiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = [
            'asuransi' => Asuransis::all(),
        ];

        $pagecontent = view('asuransi.index',$contents );

        // masterpage
        $pagemain = array(
            'title' => 'Asuransi kebakaran',
            'menu' => 'master',
            'submenu' => 'asuransi',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $pagecontent = view('asuransi.create');
  
      //masterpage
      $pagemain = array(
          'title' => 'Asuransi',
          'menu' => 'asuransi',
          'submenu' => 'asuransi',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        $saveAsuransis = new Asuransis;
        $saveAsuransis->nomoraplikasi = $request->nomoraplikasi;
        $saveAsuransis->name = $request->name;
        $saveAsuransis->cabang = $request->cabang;
        $saveAsuransis->usia = $request->usia;
        $saveAsuransis->jangkawaktu = $request->jangkawaktu;
        $saveAsuransis->hargabangunan = $request->hargabangunan;
        $saveAsuransis->tipebangunan = $request->tipebangunan;
        $saveAsuransis->premi = $request->premi;
        // return $request->all();
        $saveAsuransis->save();
        return redirect('asuransi')->with('status_success','Created asuransi');
    }

    public function update_page(Asuransis $asuransi)
    {
        $contents = [
            'asuransi' => Asuransis::find($asuransi->idasuransi)
        ];

        $pagecontent = view('asuransi.update',$contents);
  
      //masterpage
      $pagemain = array(
          'title' => 'Asuransi',
          'menu' => 'asuransi',
          'submenu' => 'asuransi',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function update_save(Request $request, Asuransis $asuransi)
    {
        $UpdateAsuransi = Asuransis::find($asuransi->idasuransi);
        $UpdateAsuransi->nomoraplikasi = $request->nomoraplikasi;
        $UpdateAsuransi->name = $request->name;
        $UpdateAsuransi->cabang = $request->cabang;
        $UpdateAsuransi->usia = $request->usia;
        $UpdateAsuransi->jangkawaktu = $request->jangkawaktu;
        $UpdateAsuransi->hargabangunan = $request->hargabangunan;
        $UpdateAsuransi->tipebangunan = $request->tipebangunan;
        $UpdateAsuransi->premi = $request->premi;
        // return $request->all();
        $UpdateAsuransi->save();
        return redirect('asuransi')->with('status_success','Updated asuransi');
    }

    public function delete(Asuransis $asuransi)
    {
        $DeleteAsuransi = Asuransis::find($asuransi->idasuransi);
        $DeleteAsuransi->delete();
        // return $asuransi->all();
        return redirect('asuransi')->with('status_success','Delete asuransi');

    }



}
