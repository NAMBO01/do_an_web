<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $list_sp_noi_bat = DB::select('SELECT s.*, ten_tac_gia
        $list_sp_noi_bat = DB::table('sb_san_pham')->where('noi_bat', 1)->limit(3)->get();
        $list_mau_ao_moi = DB::table('sb_san_pham')->where('trang_thai', 1)->limit(2)->get();
        $list_mau_giay_moi = DB::table('sb_san_pham')->where('id_loai_sp', '2')->where('noi_bat', 1)->get();



        return view('trang_chu')

            ->with('list_sp_noi_bat', $list_sp_noi_bat)->with('list_mau_ao_moi', $list_mau_ao_moi)->with('list_mau_giay_moi', $list_mau_giay_moi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
    function san_pham($id_sp)
    {
        $chi_tiet_sp = DB::table('sb_san_pham')->where('id', '=',$id_sp)->get();
        return view('single')->with('chi_tiet_sp',$chi_tiet_sp);
    }
    function product_shoes(){
        $shoes = DB::table('sb_san_pham')
        ->select(DB::raw('sb_san_pham.*'))
        ->join('sb_loai_san_pham', 'sb_san_pham.id_loai_sp', '=', 'sb_loai_san_pham.loai_san_pham')
        ->where('sb_loai_san_pham.id' )
        ->first();
    return view('')->with('shoes', $shoes);
    }
}
