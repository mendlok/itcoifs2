<?php

namespace App\Http\Controllers;
use App\Package;
use Illuminate\Http\Request;
use Auth;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('package\new_package');
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
     public function mypackages()
     {
       $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
       return view('package\my_packages',compact('packages'));

     }



    public function store(Request $request)
    {
        $courrier = $request['carrier'];
        $tracking = $request['tracking'];
        $shop = $request['shop'];
        $value = $request['value'];
        $description = $request['description'];
        $package =  new Package();
        $package ->courrier = $courrier;
        $package ->tracking = $tracking;
        $package ->tracking = $tracking;
        $package ->shop = $shop;
        $package ->value = $value;
        $package ->product_description = $description;
        $package->profile_id = Auth::user()->profile_id;
        $package->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showShopTracking(Request $request)
    {

      return view('search\search_tracking_shop');
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

    public function CountMypackages()
    {
      $count[0] = Package::where('profile_id',Auth::user()->profile_id)->get()->count();
      $count[1] = Package::where('profile_id',Auth::user()->profile_id)->get()->count();
      $count[2] = Package::where('profile_id',Auth::user()->profile_id)->get()->count();
      $count[3] = Package::where('profile_id',Auth::user()->profile_id)->get()->count();
      return $count;
    }
}
