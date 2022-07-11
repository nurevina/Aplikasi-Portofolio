<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Vendor;
use App\Models\Kategori;
use DB;

class AdminController extends Controller
{
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
        return view('admin', compact('data','kategori','vendor'));
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

    public function destroy($id){
        DB::table('portfolios')->where('id', $id)->delete();
        return redirect('/admin')->with('status', 'Data Portfolio Berhasil DiHapus');
    }

    // public function edit($id){
    //     $portfolios = DB::table('portfolios')->where('id', $id)->get();
    //     return view('admin', compact('portfolios'));
    // }

    // public function update(Request $request){
    //     $this->validate($request, [
    //     'nama_event' => 'required',
    //     'image_product' => 'required',
    //     'nama_kategori' => 'required',
    //     'nama_vendor' => 'required',
    //     ]);

    //     DB::table('portfolios')->where('id', $request->id)->update([
    //     'nama_event' => $request->nama_event,
    //     'image_product' => $request->image_product,
    //     'nama_kategori' => $request->nama_kategori,
    //     'nama_vendor' => $request->nama_vendor,
    //     ]);
    //     return redirect('/admin')->with('status', 'Data siswa Berhasil Diubah');
    // }
}