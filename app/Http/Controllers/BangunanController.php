<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bangunan;
use SoftDeletes;


class BangunanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = [
            'bangunan' => Bangunan::all(),
        ];

        $pagecontent = view('bangunan.index',$contents );

        // masterpage
        $pagemain = array(
            'title' => 'Asuransi kebakaran',
            'menu' => 'master',
            'submenu' => 'Bangunan',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $pagecontent = view('bangunan.create');
  
      //masterpage
      $pagemain = array(
          'title' => 'Bangunan',
          'menu' => 'bangunan',
          'submenu' => 'bangunan',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        $saveBangunan = new Bangunan;
        $saveBangunan->tipebangunan = $request->tipebangunan;
        $saveBangunan->tarif = $request->tarif;
        $saveBangunan->save();
        return redirect('bangunan')->with('status_success','Created bangunan');
    }

}
