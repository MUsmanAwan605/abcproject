<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Final\TubeBtryBreatherDLX;

class AdminQATBtryBreatherDLXController extends Controller
{
    public function index(){
        $tubes = TubeBtryBreatherDLX::orderBy('sr_no','DESC')->paginate(8);
        return view('admin.final.tBatteryBreatherDLX.index')->with(compact('tubes'));
    }
    public function create(){
        return view('admin.final.tBatteryBreatherDLX.add');
    }
    public function store(Request $request){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));


        $total = 0;
        if($request->get('extr_sngl_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('semi_vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_t') != 'Approved'){
            $total++;
        }
        if($request->get('cmplt_vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('wshng_t') != 'Approved'){
            $total++;
        }
        if($request->get('punching') != 'Approved'){
            $total++;
        }
        if($request->get('extr_wshr') != 'Approved'){
            $total++;
        }
        if($request->get('vulcan_wshr') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_wshr') != 'Approved'){
            $total++;
        }
        if($request->get('asmbl_wshr') != 'Approved'){
            $total++;
        }
        if($request->get('date_code_prnt') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
            'date'=> 'required',
            'extr_sngl_lyr'=>'required|not_in:none',
            'semi_vulcan'=>'required|not_in:none',
            'fnl_ctng_t'=>'required|not_in:none',
            'cmplt_vulcan'=>'required|not_in:none',
            'wshng_t'=>'required|not_in:none',
            'punching'=>'required|not_in:none',
            'extr_wshr'=>'required|not_in:none',
            'vulcan_wshr'=>'required|not_in:none',
            'fnl_ctng_wshr'=>'required|not_in:none',
            'asmbl_wshr'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        TubeBtryBreatherDLX::create([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_sngl_lyr' =>$request->get('extr_sngl_lyr'),
            'semi_vulcan' =>$request->get('semi_vulcan'),
            'fnl_ctng_t' =>$request->get('fnl_ctng_t'),
            'cmplt_vulcan' =>$request->get('cmplt_vulcan'),
            'wshng_t' =>$request->get('wshng_t'),
            'punching' =>$request->get('punching'),
            'extr_wshr' =>$request->get('extr_wshr'),
            'vulcan_wshr' =>$request->get('vulcan_wshr'),
            'fnl_ctng_wshr' =>$request->get('fnl_ctng_wshr'),
            'asmbl_wshr' =>$request->get('asmbl_wshr'),
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/product/tBtryBreatherDLX');

    }

    public function edit(string $id){

        $tube = TubeBtryBreatherDLX::find($id);
        return view('admin.final.tBatteryBreatherDLX.edit')->with(compact('tube'));

    }

    public function update(Request $request ,string $id){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));


       $total = 0;
        if($request->get('extr_sngl_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('semi_vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_t') != 'Approved'){
            $total++;
        }
        if($request->get('cmplt_vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('wshng_t') != 'Approved'){
            $total++;
        }
        if($request->get('punching') != 'Approved'){
            $total++;
        }
        if($request->get('extr_wshr') != 'Approved'){
            $total++;
        }
        if($request->get('vulcan_wshr') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_wshr') != 'Approved'){
            $total++;
        }
        if($request->get('asmbl_wshr') != 'Approved'){
            $total++;
        }
        if($request->get('date_code_prnt') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
            'date'=> 'required',
            'extr_sngl_lyr'=>'required|not_in:none',
            'semi_vulcan'=>'required|not_in:none',
            'fnl_ctng_t'=>'required|not_in:none',
            'cmplt_vulcan'=>'required|not_in:none',
            'wshng_t'=>'required|not_in:none',
            'punching'=>'required|not_in:none',
            'extr_wshr'=>'required|not_in:none',
            'vulcan_wshr'=>'required|not_in:none',
            'fnl_ctng_wshr'=>'required|not_in:none',
            'asmbl_wshr'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        $tube = TubeBtryBreatherDLX::find($id);
        $tube->update([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_sngl_lyr' =>$request->get('extr_sngl_lyr'),
            'semi_vulcan' =>$request->get('semi_vulcan'),
            'fnl_ctng_t' =>$request->get('fnl_ctng_t'),
            'cmplt_vulcan' =>$request->get('cmplt_vulcan'),
            'wshng_t' =>$request->get('wshng_t'),
            'punching' =>$request->get('punching'),
            'extr_wshr' =>$request->get('extr_wshr'),
            'vulcan_wshr' =>$request->get('vulcan_wshr'),
            'fnl_ctng_wshr' =>$request->get('fnl_ctng_wshr'),
            'asmbl_wshr' =>$request->get('asmbl_wshr'),
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'prod' =>$request->get('prod'),
            'total' => $total


        ]);
        return redirect()->to('/admin/product/tBtryBreatherDLX');

    }


    public function destroy(string $id){
        $tube = TubeBtryBreatherDLX::find($id);
        $tube->delete();
        return redirect()->to('/admin/product/tBtryBreatherDLX');
    }
}