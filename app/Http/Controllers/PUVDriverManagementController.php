<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\puv;
use App\selects;
use App\info;


class PUVDriverManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puv = DB::table('puvs')
        ->orderBy('id')
        ->select('puvs.*')
        ->paginate(12);

        // $puv = DB::table('puvs')->paginate(12);
        // paginate(5);
        return view('PUV-mgmt/index', ['puv' => $puv]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // $puv = collect([ 'select_id' => 0 ]);
        // $selectname = collect([ 'Select Remark', 'Passed', 'Failed' ]);
  
  // return view('welcome', compact('billingAddress', 'states'));
          $selects = selects::pluck('select', 'select');
          $id = 1;
         
        return view('PUV-mgmt/create', compact('id','selects'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:60',
            'lastname' => 'required|max:60',
            'middlename' => 'required|max:60',
            'address' => 'required|max:120',
            'birthdate' => 'required',
            'kin' => 'required',
            'Civil_status' => 'required',
            'Gender' => 'required',
            'Telephone' => 'required|max:11',
            'Mobile' => 'required|max:11',
            'NumberYears' => 'required|max:5',
            'licenseNumber' => 'required|max:60',
            'LicenseDate' => 'required|max:20',
            'Restriction' => 'required|max:5',
            'AffilationGroup' => 'required|max:60',
            'date_hired' => 'required|max:20',
            'held' => 'required|max:60',
            'score' => 'required|max:5',
            'remarks' => 'required|max:20'

            
        ]);

        $puv = new puv([

            'firstname' => $request->get('firstname'),
            'middlename' => $request->get('middlename'),
            'lastname' => $request->get('lastname'),
            'address' => $request->get('address'),
            'birthdate' => $request->get('birthdate'),
            'kin' => $request->get('kin'),
            'Civil_status' => $request->get('Civil_status'),
            'Gender' => $request->get('Gender'),
            'Telephone' => $request->get('Telephone'),
            'Mobile' => $request->get('Mobile'),
            'NumberYears' => $request->get('NumberYears'),
            'licenseNumber' => $request->get('licenseNumber'),
            'LicenseDate' => $request->get('LicenseDate'),
            'Restriction' => $request->get('Restriction'),
            'AffilationGroup' => $request->get('AffilationGroup'),
            'date_hired' => $request->get('date_hired'),
            'held' => $request->get('held'),
            'score' => $request->get('score'),     
            'remarks' => $request->get('remarks'),
            // 'picture' => $request->file('picture')->store('avatars')

        ]);
        $input['picture'] = $puv;
        $puv->save();
        return redirect('/PUV-Driver-Management')->with('success', 'Info saved!');
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
        $puv = puv::find($id);
        if ($puv == null || count($puv) == 0) {
            return redirect()->intended('/PUV-Driver-Management');
        }
        $selects = selects::pluck('select', 'select');
          
        
        return view('PUV-mgmt.edit', compact('puv','selects'));
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

        $puv = puv::findOrFail($id);
          

        $this->validate($request, [
            'firstname' => 'required|max:60',
            'lastname' => 'required|max:60',
            'middlename' => 'required|max:60',
            'address' => 'required|max:120',
            'birthdate' => 'required',
            'kin' => 'required',
            'Civil_status' => 'required',
            'Gender' => 'required',
            'Telephone' => 'required|max:11',
            'Mobile' => 'required|max:11',
            'NumberYears' => 'required|max:5',
            'licenseNumber' => 'required|max:60',
            'LicenseDate' => 'required|max:20',
            'Restriction' => 'required|max:5',
            'AffilationGroup' => 'required|max:60',
            'date_hired' => 'required|max:20',
            'held' => 'required|max:60',
            'score' => 'required|max:5',
            'date_hired1' => 'nullable|max:20',
            'held1' => 'nullable|max:60',
            'score1' => 'nullable|max:5',
            'date_hired2' => 'nullable|max:20',
            'held2' => 'nullable|max:60',
            'score2' => 'nullable|max:5',
            'date_hired3' => 'nullable|max:20',
            'held3' => 'nullable|max:60',
            'score3' => 'nullable|max:5',
            'remarks' => 'required|max:20'
            
        ]);
        $puv->firstname =  $request->get('firstname');
        $puv->lastname = $request->get('lastname');
        $puv->middlename= $request->get('middlename');
        $puv->address = $request->get('address');
        $puv->birthdate = $request->get('birthdate');
        $puv->kin = $request->get('kin');
        $puv->Civil_status = $request->get('Civil_status');
        $puv->Gender = $request->get('Gender');
        $puv->Telephone = $request->get('Telephone');
        $puv->Mobile = $request->get('Mobile');
        $puv->NumberYears = $request->get('NumberYears');
        $puv->licenseNumber = $request->get('licenseNumber');
        $puv->LicenseDate = $request->get('LicenseDate');
        $puv->Restriction = $request->get('Restriction');
        $puv->AffilationGroup = $request->get('AffilationGroup');
        $puv->date_hired = $request->get('date_hired');
        $puv->held = $request->get('held');
        $puv->score = $request->get('score');
        $puv->date_hired1 = $request->get('date_hired1');
        $puv->held1 = $request->get('held1');
        $puv->score1 = $request->get('score1');
        $puv->date_hired2 = $request->get('date_hired2');
        $puv->held2 = $request->get('held2');
        $puv->score2 = $request->get('score2');            
        $puv->date_hired3 = $request->get('date_hired3');
        $puv->held3 = $request->get('held3');
        $puv->score3 = $request->get('score3');      
        $puv->remarks = $request->get('remarks');



        $puv->save();






        return redirect('/PUV-Driver-Management')->with('success', 'Info Updated!');
    }
    // {
    //     $puv = puv::findOrFail($id);
    //     $this->validateInput($request);
    //     // Upload image
    //     $keys = ['firstname','middlename', 'lastname', 'address', 'birthdate', 'kin', 'Gender',
    //     'Telephone', 'Mobile', 'NumberYears', 'licenseNumber', 'LicenseDate', 'Restriction','AffilationGroup','date_hired'];
    //     $input = $this->createQueryInput($keys, $request);
    //     if ($request->file('picture')) {
    //         $path = $request->file('picture')->store('avatars');
    //         $input['picture'] = $path;
    //     }

    //     puv::where('id', $id)
    //         ->update($input);

    //     return redirect()->intended('/PUV-Driver-Management');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $puv =puv::where('id',$id)->first();
        if ($puv != null) {
        $puv->delete();
        return redirect('/PUV-Driver-Management')->with(['message'=> 'Info Deleted!']);
    }

     return redirect('/PUV-Driver-Management')->with('success', 'Cannot be Deleted!');;

         // $puv = puv::find($id);
         // $puv->delete();
         // return redirect('/PUV-Driver-Management')->with('success', 'Info Deleted!');
    }

    /**
     * Search state from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname']
            ];
        $puv = $this->doSearchingQuery($constraints);
        $constraints['firstname'] = $request['firstname'];
        $constraints['lastname'] = $request['lastname'];
        return view('PUV-mgmt/index', ['puv' => $puv, 'searchingVals' => $constraints]);

  }

    private function doSearchingQuery($constraints) {
        $query = DB::table('puvs');
       // ->select('firstname');
        // ->leftJoin('department', 'puv.department_id', '=', 'department.id')
        // ->leftJoin('state', 'puv.state_id', '=', 'state.id')
        // ->leftJoin('country', 'puv.country_id', '=', 'country.id')
        // ->leftJoin('division', 'puv.division_id', '=', 'division.id')
        // ->select('puv.firstname as puv_name', 'puv.*','department.name as department_name', 'department.id as department_id', 'division.name as division_name', 'division.id as division_id');
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where($fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }

     /**
     * Load image resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function load($name) {
         $path = storage_path().'/app/avatars/'.$name;
        if (file_exists($path)) {
            return Response::download($path);
        }
    }


// EDIT
    // private function validateInput($request) {
    //     $this->validate($request, [
    //         'lastname' => 'required|max:60',
    //         'firstname' => 'required|max:60',
    //         'middlename' => 'required|max:60',
    //         'address' => 'required|max:120',
    //         'birthdate' => 'required',
    //         'country_id' => 'required',
    //         'Gender' => 'required',
    //         'Telephone' => 'required|max:11',
    //         'Mobile' => 'required|max:11',
    //         'NumberYears' => 'required|max:5',
    //         'licenseNumber' => 'required|max:60',
    //         'LicenseDate' => 'required|max:20',
    //         'Restriction' => 'required|max:5',
    //         'AffilationGroup' => 'required|max:60',
    //         'date_hired' => 'required|max:20',
    //         'picture' => 'required'
            
    //     ]);
    // }

    // private function createQueryInput($keys, $request) {
    //     $queryInput = [];
    //     for($i = 0; $i < sizeof($keys); $i++) {
    //         $key = $keys[$i];
    //         $queryInput[$key] = $request[$key];
    //     }

    //     return $queryInput;
    // }
}
