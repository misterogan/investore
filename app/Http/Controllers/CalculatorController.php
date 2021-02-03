<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CalculatorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected const INVESTMENT_OBJ = ['retiring' => 'Pensiun' , 'travel'=>'Nikah/Traveling' ,'education'=>'Sekolah Anak' ,'assets'=>'Beli Aset' ,'income' =>'Cuan Income','emergency_fund' =>'Dana Darurat'];
    protected const COLOUR = ['blue' , 'orange' ,'purple' ,'red' ,'green','pink'];
    protected const PENGHASILAN = ['Kurang Dari Rp 60 Juta' ,'Rp 60 Juta s/d Rp. 120 Juta','Rp 120 Juta s/d Rp. 240 Juta','Rp. 240 Juta s/d Rp. 500','Lebih Dari Rp 500'];
    protected const CURRENT_INNVEST = ['Fisik : Emas, Tanah, dan atau Bangunan' ,'Produk Bank : Deposito','Produk Pasar Modal : Saham, Obligasi, Reksa Dana','Produk Berjangka : Komoditas, Cryptocurrency','Produk Fintech : Lending, Equity Funding'];
    protected const IF_INVEST_DOWN = ['Tidak mau keuntungan turun','Baru dijual jika keuntungan menurun','OK saja, selama tren positif jangka menengah','Dipertahankan karena orientasi jangka panjang' ,'Beli lagi karena harga diskon'];
    protected const INVEST_GOAL = ['Pendapatan utama','Pendapatan tambahan & konsisten profit','Rata-rata nilai pendapatan positif','Pertumbuhan nilai jangka panjang','Pertumbuhan nilai luar biasa'];
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'invesment' => self::INVESTMENT_OBJ,
            'color' => self::COLOUR
        ];
        return View::make('frontend.content.calculator_index')->with($data);
        //return view('frontend.content.calculator_index');
    }

    public function invest_calculator($id){
        if(array_key_exists($id , self::INVESTMENT_OBJ)){
            $data = [
                'title' => self::INVESTMENT_OBJ[$id],
                'penghasilan' => self::PENGHASILAN,
                'invest_down' => self::IF_INVEST_DOWN,
                'current_invest' => self::CURRENT_INNVEST,
                'goal_invest' => self::INVEST_GOAL
            ];
            return View::make('frontend.content.investcalculator_first_step')->with($data);
        }
        return abort(404);
        
    }
}
