<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Vulnerable;
use Illuminate\Http\Request;
use App\Http\Controllers\VulnerableCreate;

class VulnerableController extends Controller
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


        $vulnerableInfo = vulnerable::with('vulnerables');
        $data= Vulnerable::all();
        return view('show',['vulnerables' =>$data]);
        $agencies = Vulnerable::with('vulnerable')->orderBy('id')->get();

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
        //$vulnerableInfo = Vulnerable::with('vulnerables');
       //$data= Vulnerable::all();
        //return view('/show');
        return view('vulnerable');
        
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
        $vulnerable = new Vulnerable();
        Vulnerable::create([
            'vulnerable_name' => $request->vulnerable_name,
            'vulnerable_phone' => $request->vulnerable_phone,
            'vulnerable_location' => $request->vulnerable_location,
            'vulenerable_family' => $request->vulenerable_family,
            'vulenerable_status' => $request->vulenerable_status,
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

        return view('Agency/show', compact('Vulnerables'));
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
        $vulnerable = Vulnerable::find($id);
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
        $request->validate([
       'vulnerable_name'=>'required',
       'vulnerable_phone'=>'required',
       'vulnerable_family'=>'required',
        'vulnerable_status'=>'required',
       
   ]);

         $vulnerable = Vulnerable::find($id);
            $vulnerable->vulnerable_name = $request->get('vulnerable_name');
            $vulnerable->vulnerable_phone = $request->get('vulnerable_phone');
            $vulnerable->vulnerable_family = $request->get('vulnerable_family');
            $vulnerable->vulnerable_status = $request->get('vulnerable_status');
    
        
           $avulnerable->save($request->all());
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
         $vulnerable = Vulnerable::find($id);
        $vulnerable->delete();
        return redirect('show')->with('success', 'Agency deleted!');
    }
}
