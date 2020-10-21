<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Donation;
//use App\Models\Room;
use Illuminate\Http\Request;
//use App\Http\Controllers\donation;
use App\Http\Controllers\donationCreate;
class donationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $donationInfo = donation::with('donations');
        $data= Donation::all();
        return view('donation',['donations' =>$data]);
        $donations = Donation::with('donation')->orderBy('id')->get();

        return view('donation');//->with('donations', $donations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $donationInfo = donation::with('donations');
        $data= Donation::all();
        return view('donation',['donations' =>$data])->with('donations', $data);
        //return view('/donation');
// This is where ive stopped for today ,,,,,*******

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

          $donation = new Donation();
        Donation::create([

'donor_name' => $request->donor_name,
'donor_mail' => $request->donor_mail,
'donor_phone' => $request->donor_phone,
'donor_location' => $request->donor_location,
'food_name' => $request->food_name,
'food_amount'=>$request->food_amount,
'food_description'=>$request->food_description
        ]);
       

     

            return redirect ('/donation')->with('success', 'Donation has been made successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Reservation $reservation)
    {
        //

        
      return view('/donation', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
        public function edit ($id)
        {
        //
         $donation = Donation::find($id);
       return view('donationEdit', compact('donation'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        //
            $request->validate([
            'donor_name'=>'required',
            'donor_mail'=>'required',
            'donor_phone'=>'required',
            'donor_location'=>'required',
            'food_name'=>'required',
            'food_amount'=>'required',
            'food_description'=>'required'
        ]);

  
         $donation = Donation::find($id);
        $donation->donor_name =  $request->get('donor_name');
        $donation->donor_mail = $request->get('donor_mail');
        $donation->donor_phone = $request->get('donor_phone');
        $donation->donor_location = $request->get('donor_location');
        $donation->food_name = $request->get('food_name');
        $donation->food_amount = $request->get('food_amount');
        $donation->food_description = $request->get('food_description'); 

         $donation->save();
          
      return redirect('/donation')->with('success', 'Successfully updated your donation!');
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

        $donation = Donation::find($id);
      $donation->delete(); 

      return redirect('/donation')->with('success', 'Successfully deleted your reservation!');
    }
}
