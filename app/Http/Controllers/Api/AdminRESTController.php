<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Portfolio;
use App\Models\Vendor;
use App\Models\Kategori;


class AdminRESTController extends Controller
{

    public function __construct(){
        $this->middleware('jwt.verify', ['except' => ['index']]);
    }

    public function index(){

        
            $data = Portfolio::with('vendor', 'kategori')->get();
       
            $kategori = Kategori::orderBy('nama_kategori','ASC')
            ->get()
            ->pluck('nama_kategori','id');
            $vendor = Vendor::orderBy('nama_vendor','ASC')
            ->get()
            ->pluck('nama_vendor','id');
            // dd($data->vendor);
            // $vendor = Vendor::all();
            // dd($vendor->products);
            return response()->json($data);
        
    }

    public function store(Request $request)
    {
        $id = $request->id;
        //    dd($id);
        
        // dd($request->image);
        $this->validate($request , [
            'nama_event'    => 'required|string',
            'kategori_id'   => 'required',
            'id_vendor'     => 'required',
        ]);
        

        $input = $request->all();
        
        $input['image'] = null;
        // dd($input);
        $file= $request->file('image');
        $filename= $file->getClientOriginalName();
        $request->image->getClientOriginalExtension();
        $request->image->move(public_path('/pict/'), $filename);
        
        $tes= $file->getClientOriginalName();
       
        $post   =   Portfolio::updateOrCreate(['id' => $id],
                    [
                        'vendor_id' => $request->id_vendor,
                        'id_kategori' => $request->kategori_id,
                        'nama_event' => $request->nama_event,
                        'image_product' => $tes,
                        
                    ]); 

        return response()->json($post);
    }

    public function data_product(Request $request){
        $data = Portfolio::all();       
            return DataTables::of($data)
            ->addColumn('cover', function ($data){
                $img =   '<img src="http://localhost:8000/pict/'.$data->imageProduct.'" width="200"/>';
                dd($data);
                return $img;
            })  
            ->rawColumns(['cover'])
            ->addIndexColumn()
            ->make(true);

    }

    public function destroy(Request $request){
        $id = $request['id'];

        try{
            $del=Portfolio::where('id', $id)->delete();
            return response()->json(['message'=>'Successfully Deleted']);
        } catch(Exception $e){
            return response()->json(['message'=>$e]);
        }
        
        
    }
}
