<?php

namespace App\Http\Controllers;
use App\Models\Customers;
use App\Models\Serviceprovider;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor;
use App\Charts\PulseChart;
use App\Models\servicelist;
use App\Models\booking;
use App\Models\Payment;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    function dashboard(){
        return view('dashboard3');
    }


    function chart(){
        return view('chart');
    }

    function char(){
        $data= Customers::all();
        return view('list', ["data"=>$data]);
    }

    function cus(){
        $data = DB::table('customers')
        // ->join('bookings','servic_id',"=",'servicelists.id')
        // ->join('customers','customers.id',"=",'bookings.cus_id')
        // ->select('customers.name','customers.email','customers.credit_available','customers.id',DB::raw('GROUP_CONCAT(bookings.servic_id) as services'),
        // DB::raw('count(bookings.servic_id)as total'))

        // ->groupBy('customers.id')
        ->orderBy('customers.id', 'desc')
       // ->join('customers','id',"=",'bookings.cus_id')
       // ->select('serviceproviders.*')
    ->get();

        $dat= DB::table('customers')
        ->count();
        $sales=DB::table('payments')
        ->sum('amount_paid');
        $hot=DB::table('serviceproviders')
        ->count();

        $today_users = Customers::whereDate('created_at', today())->count();
        $today_hotels = Serviceprovider::whereDate('created_at', today())->count();
        $today_sales= Payment::whereDate('paytime', today())
        ->sum('amount_paid');

        return view('customers', ["data"=>$data, "dat"=>$dat, "sales"=>$sales, "hot"=>$hot,  'users'=>$today_users, 'hotels'=>$today_hotels, 'todaysales'=>$today_sales]);
    }

    function hotels(){
        $data= Serviceprovider::all();
        $dat= DB::table('customers')
        ->count();
        $sales=DB::table('payments')
        ->sum('amount_paid');
        $hot=DB::table('serviceproviders')
        ->count();

        $today_users = Customers::whereDate('created_at', today())->count();
        $today_hotels = Serviceprovider::whereDate('created_at', today())->count();
        $today_sales= Payment::whereDate('paytime', today())
        ->sum('amount_paid');

        return view('hotels', ["data"=>$data, "dat"=>$dat, "sales"=>$sales, "hot"=>$hot,  'users'=>$today_users, 'hotels'=>$today_hotels, 'todaysales'=>$today_sales]);
    }


    function bookings(){
        $data = DB::table('serviceproviders')
        ->join('bookings','hotel_id',"=",'serviceproviders.id')

        ->join('servicelists','servicelists.id',"=",'bookings.servic_id')
        ->join('customers','customers.id',"=",'bookings.cus_id')
        ->join('payments','payments.booking_id',"=",'bookings.b_id')
        ->orderBy('date_of_booking', 'desc')

      // ->groupBy('hotel_name')
       // ->join('customers','id',"=",'bookings.cus_id')
       // ->select('serviceproviders.*')
        ->get();




    $dat= DB::table('customers')
    ->count();
    $sales=DB::table('payments')
    ->sum('amount_paid');
    $hot=DB::table('serviceproviders')
    ->count();

    $today_users = Customers::whereDate('created_at', today())->count();
    $today_hotels = Serviceprovider::whereDate('created_at', today())->count();
    $today_sales= Payment::whereDate('paytime', today())
    ->sum('amount_paid');



        //$data= Customers::all();
        return view('bookings', ["data"=>$data, "dat"=>$dat, "sales"=>$sales, "hot"=>$hot, 'users'=>$today_users, 'hotels'=>$today_hotels, 'todaysales'=>$today_sales]);



    }

    public function dashh()
    {
        $dattt=Payment::join('serviceproviders', 'serviceproviders.id',"=",'payments.hotel_id')
        -> groupBy('hotel_id')
        ->selectRaw('sum(amount_paid) as sum, hotel_name')

        ->orderby('sum', 'desc')
        ->paginate(4)
        ->pluck('sum','hotel_name');

        $labels = $dattt->keys();
        $data = $dattt->values();


        $datttt=Payment::

       selectRaw('sum(amount_paid) as sum, day(paytime) as paytimee')
        ->groupBy('paytimee')
        //->orderBy('paytime','asc')



        ->pluck('sum','paytimee');

        $paytime = $datttt->keys();
        $sum = $datttt->values();



        $dat= DB::table('customers')
        ->count();
        $sales=DB::table('payments')
        ->sum('amount_paid');
        $hot=DB::table('serviceproviders')
        ->count();





       // $data= Serviceprovider::all();

       $chart = new PulseChart;
       $gym= booking::where('servic_id','1')->count();
       $pool=booking::where('servic_id','2')->count();
       $conf=booking::where('servic_id','3')->count();
       $bar=booking::where('servic_id','4')->count();
       $game=booking::where('servic_id','5')->count();



       $today_users = Customers::whereDate('created_at', today())->count();
       $today_hotels = Serviceprovider::whereDate('created_at', today())->count();

      $today_sales= Payment::whereDate('paytime', today())
        ->sum('amount_paid');




        $chart->labels(['Gym', 'Pool', 'Conference Room','Bar','Games']);
        $chart->dataset('My dataset 1', 'pie', [$gym, $pool, $conf,$bar,$game ]);
       // $chart->loader('false');
       // $chart->loaderColor('red');
       $chart->loaderColor('#0b96e0');
       $chart->height(300);

       // return view('kk', ['chart' => $chart]);

        return view('kk',["dat"=>$dat, "sales"=>$sales, "hot"=>$hot, 'chart' => $chart, 'users'=>$today_users, 'hotels'=>$today_hotels, 'todaysales'=>$today_sales], compact('labels', 'data','paytime', 'sum'));
        //

    }

    function admins(){
        $data = DB::table('users')

       // ->join('customers','id',"=",'bookings.cus_id')
       // ->select('serviceproviders.*')
    ->get();

        $dat= DB::table('customers')
        ->count();
        $sales=DB::table('payments')
        ->sum('amount_paid');
        $hot=DB::table('serviceproviders')
        ->count();

        $today_users = Customers::whereDate('created_at', today())->count();
        $today_hotels = Serviceprovider::whereDate('created_at', today())->count();
        $today_sales= Payment::whereDate('paytime', today())
        ->sum('amount_paid');

        return view('admins', ["data"=>$data, "dat"=>$dat, "sales"=>$sales, "hot"=>$hot,  'users'=>$today_users, 'hotels'=>$today_hotels, 'todaysales'=>$today_sales]);
    }








    public function adminlogin(){





        return view('adminlogin');
    }

    public function try(){

//         return Visitor::groupBy('viewer')
//    ->selectRaw('*, sum(sales) as sum')
//    ->get();
//         //$dattt
    //  return Visitor::all()

    //  ->groupBy('hotelname')
    // // ->get();
    //  ->sum('sales');
    // ->get();
     //->groupBy('hotel_id')
     //->sum('amount_paid');
        // ->join('serviceproviders','payment.hotel_id',"=",'serviceproviders.id')
        // ->select('amount_paid', 'hotel_name')
        // ->groupBy('serviceproviders.id')
        // ->get();
       // ->orderBy('sales', 'desc')


        // ->pluck('sales','hotelname');



        // $labels = $dattt->keys();
        // $data = $dattt->values();

        // return view('try', compact('labels', 'data'));






    //     return  DB::table('serviceproviders')
    //     ->join('bookings','hotel_id',"=",'serviceproviders.id')
    //   //  ->orderBy('date_of_booking', 'desc')
    //     ->join('customers','customers.id',"=",'bookings.cus_id')
    //     ->orderBy('date_of_booking', 'desc')
    //    // ->select('serviceproviders.*')
    // ->get();


    //



  // w



    }
}
