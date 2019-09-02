<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kantorcabangs;
use SoftDeletes;


class KantorcabangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = [
            'kantor' => Kantorcabangs::all(),
        ];

        $pagecontent = view('kantor.index',$contents );

        // masterpage
        $pagemain = array(
            'title' => 'Asuransi kebakaran',
            'menu' => 'master',
            'submenu' => 'kantor',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $pagecontent = view('kantor.create');
  
      //masterpage
      $pagemain = array(
          'title' => 'Asuransi',
          'menu' => 'kantor',
          'submenu' => 'kantor',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        $saveKantor = new Kantorcabangs;
        $saveKantor->namecabang = $request->namecabang;
        $saveKantor->save();
        return redirect('kantor')->with('status_success','Created kantor');
    }
}
