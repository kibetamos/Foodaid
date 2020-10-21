<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Agency;
use Illuminate\Http\Request;
use App\Http\Controllers\AgencyCreate;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //$Agencies = Agency::paginate(4);

        //return view('Agency.show', compact('Agencies'));


        $agencyInfo = agency::with('agencies');
        $data= Agency::all();
        return view('show',['agencies' =>$data]);
        $agencies = Agency::with('agency')->orderBy('id')->get();

        return view('/show');
}
    /**
     * Show the form fo. creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$donationInfo = donation::with('donations');
        //$data= Agency::all();
        //return view('show',['agencies' =>$data])->with('agencies', $data);
        //
        $agencyInfo = Agency::with('agencies');
       $data= Agency::all();
        //return view('/show');
        return view('show',['agencies' =>$data])->with('agenciess', $data);
        
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
        $agency = new Agency();
        Agency::create([
            'agency_name' => $request->agency_name,
            'agency_mail' => $request->agency_mail,
            'agency_phone' => $request->agency_phone,
            'agency_location' => $request->agency_location
        ]);

        return redirect('/show')->with('success', 'Agency saved!');
            
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
        //$Agency = Agency::find($id);

        return view('Agency/show', compact('Agencies'));
        //return view('/show', compact('agency'));
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
        $agency = Agency::find($id);
        return view('edit', compact('agency')); 
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
        //
        $request->validate([
       'agency_name'=>'required',
       'agency_mail'=>'required',
       'agency_phone'=>'required',
        'agency_location'=>'required',
       
   ]);

         $agency = Agency::find($id);
            $agency->agency_name = $request->get('agency_name');
            $agency->agency_mail = $request->get('agency_mail');
            $agency->agency_phone = $request->get('agency_phone');
            $agency->agency_location = $request->get('agency_location');
    
        
           $agency->save($request->all());
        return redirect('/show')->with('success', 'Successfully updated your Agency');

          // $agency->save();

           //return redirect('index')->with('success', 'Successfully updated your reservation!');
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
         $agency = Agency::find($id);
        $agency->delete();
        return redirect('show')->with('success', 'Agency deleted!');
    }
}
