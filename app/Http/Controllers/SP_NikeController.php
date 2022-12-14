<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SP_NikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_san_pham = DB::table('sb_san_pham')->select('id','ten_san_pham','hinh','gioi_thieu')->where('id_loai_sp', '1')
        ->get();

        return view('production_nike')->with('list_san_pham', $list_san_pham);
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
    public function show($id_sp)
    {
        $thong_tin_san_pham = DB::table('sb_san_pham')
            ->select(DB::raw('sb_san_pham.*,  ten_nha_cung_cap, ten_nha_san_xuat'))
            ->join('sb_nha_cung_cap', 'sb_san_pham.id_nha_cung_cap', '=', 'sb_nha_cung_cap.id')
            ->join('sb_loai_san_pham', 'sb_san_pham.id_loai_sp', '=', 'sb_loai_san_pham.id')
            ->join('sb_nha_san_xuat', 'sb_san_pham.id_nha_san_xuat', '=', 'sb_nha_san_xuat.id')
            ->where('sb_san_pham.id', $id_sp)
            ->first();
        return view('single')->with('thong_tin_san_pham', $thong_tin_san_pham);
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
}
