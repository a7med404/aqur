<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \DB;
use \App\Build;
use \App\Http\Requests;
use \App\Http\Controllers\Upload;
use \App\Http\Requests\BuildRequest;

class BuildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Build $build)
    {
        $build = $build->all();
        return view('admin.build.index', ['builds' => $build]);
    }
    public function pandding(Build $build)
    {
        $build = $build->where('bu_status', 1)->get();
        dd($build);
        return view('admin.build.index', ['builds' => $build]);
    }
    public function unPandding(Build $build)
    {
        $build = $build->where('bu_status', 0)->get();
        return view('admin.build.index', ['builds' => $build]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.build.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuildRequest $request, Build $build)
    {
        $newNameForImage = null; # For If Not Have Image Set Null
        if ($request->hasFile('bu_image')) {
            $file = $request->file('bu_image');
            $newNameForImage = time().'_'.$file->getClientOriginalName();
            $file->storeAs('public/bulids', $newNameForImage);
        }
        $userId = auth()->user()->id;
        $data = [
        'bu_name'           => $request->bu_name,
        'bu_price'          => $request->bu_price,
        'bu_rent'           => $request->bu_rent,
        'bu_square'         => $request->bu_square, 
        'bu_type'           => $request->bu_type,
        'bu_rooms'          => $request->bu_rooms,
        'bu_place'          => $request->bu_place,
        'bu_image'          => $newNameForImage,
        'bu_small_des'      => $request->bu_small_des,
        'bu_meta'           => $request->bu_meta, 
        'bu_longitude'      => $request->bu_longitude,
        'bn_latitude'       => $request->bn_latitude,
        'bu_large_des'      => $request->bu_large_des,
        'bu_status'         => $request->bu_status,
        'user_id'           => $userId,    
        ];
        $build->create($data);
        return redirect()->route('build.index')->withFlashMassage('Aquer Added Susscefully');
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
        $buildToUpdate = Build::find($id);
        return view('admin.build.edit', ['build' => $buildToUpdate]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BuildRequest $request, $id)
    {
        $buildToUpdate = Build::find($id);
        $buildToUpdate->fill(array_except($request->all(), ['bu_image']))->save();
        // $newNameForImage = null; # For If Not Have Image Set Null
        
        // if ($request->bu_image) {
        //     $file = $request->file('bu_image');
        //     $newNameForImage = time().'_'.$file->getClientOriginalName();
        //     $file->storeAs('public/builds', $newNameForImage);
        //     \Storage::delete($buildToUpdate->bu_image);
        //     $buildToUpdate->fill(['bu_image' => $newNameForImage])->save();
            
        // }
        // dd($newNameForImage);
        return redirect()->back()->withFlashMassage('Aquer Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buildToDelete = Build::find($id);
        $buildToDelete->delete();
        return redirect()->back()->withFlashMassage('Aquer Deleted Susscefully');
    }

    public function editStatus($id){
        $buildUpdate = Build::find($id);
        if ($buildUpdate->bu_status == 0) {
            $buildUpdate->bu_status = 1;
        }else {
            $buildUpdate->bu_status = 0;
        }
        $buildUpdate->save();
        return redirect()->back()->withFlashMassage('build Updated Susscefully');
    }

    public function showAllBuild(Build $build)
    {
        $build = $build->where('bu_status', 1)->orderBy('id','desc')->paginate(15);
        return view('website.build.all', ['builds' => $build]);
    }

    public function showForRent(Build $build)
    {
        $build = $build->where('bu_status', 1)->where('bu_rent', 1)->orderBy('id','desc')->paginate(10);
        return view('website.build.all', ['builds' => $build]);
    }

    public function showForBuy(Build $build)
    {
        $build = $build->where('bu_status', 1)->where('bu_rent', 0)->orderBy('id','desc')->paginate(10);
        return view('website.build.all', ['builds' => $build]);
    }

    public function showByType($type, Build $build)
    {
        $build = $build->where('bu_status', 1)->where('bu_type', $type)->orderBy('id','desc')->paginate(10);
        return view('website.build.all', ['builds' => $build]);
    }

    public function searchForBuild(Request $request, Build $build)
    {
        $requestAll = array_except($request->toArray(), ['_token', 'submit', 'page', 'price_from', 'price_to']);
        $array = [];

        // $from       = ($request->price_from == "" || null) ? 0 : $request->price_from;
        // $to         = ($request->price_to   == "" || null) ? 10000000000 : $request->price_to;
        $query      = DB::table('build')->select('*');
        
        foreach ($requestAll as $key => $req) {
            if (!($req == "" || null)) {
                $query->where($key, $req);
                $array[$key] = $req; 
            }
        }
        if (!($request->price_from == "" || null) && ($request->price_to   == "" || null)) {
            $query = $query->where('bu_price', '>=', $request->price_from);
        }elseif (($request->price_from == "" || null) && !($request->price_to   == "" || null)) {
            $query = $query->where('bu_price', '<=', $request->price_to);
        }elseif(!($request->price_from == "" || null) && !($request->price_to   == "" || null)){
            $query = $query->whereBetween('bu_price', [$request->price_from, $request->price_to]);
        }
        $builds = $query->orderBy('id','desc')->paginate(6);
        return view('website.build.all', ['builds' => $builds, 'array' => $array]);

     /*   $requestAll = array_except($request->toArray(), ['_token', 'submit', 'price_from', 'price_to']);
        $from = $request->price_from;
        $to = $request->price_to;
        # $i = 0;  For Without Where
        $query = '';
        $between = '';

        if (($from == "" || null) && ($to == "" || null)) {
            $between = '';
        }else {
            $f = $from == "" || null ? 0 : $from;
            $t = $to == "" || null ? 1000000000 : $to;
            $between = "WHERE bu_price BETWEEN " . $f." AND ". $t;
            
        }
        foreach ($requestAll as $key => $req) {
            if ($req == "") {
                continue;
            }else {
                $where = $between == '' ? " WHERE " : " AND ";
                $query .= $between.$where." ".$key." = ".$req;
                $between = " ";
            }
        }
        $allQuery = " SELECT * FROM build ".$between." ".$query;
        $builds = DB::select($allQuery);
        $search = 'search'; # For Confirm it's Comming From Search

        #price_from price_to rooms bu_rent  bu_type   bu_square
         $build = $build->where('bu_status', 1)
                        ->whereBetween('bu_price', [$request->price_from, $request->price_to])
                        ->where('bu_rent',     $request->bu_rent)
                        ->where('bu_type',     $request->bu_type)
                        ->where('bu_rooms',         $request->bu_rooms)
                        ->where('bu_square', $request->bu_square)
                        ->orderBy('id','desc')->paginate(10); */
        
    }

    public function detialsBuild($id, Build $build)
    {
        $buildInfo  = $build->findOrFail($id);
        $sameRent   = $build->where('bu_rent', $buildInfo->bu_rent)->orderBy(DB::raw('RAND()'))->take(3)->get();
        $sameType   = $build->where('bu_type', $buildInfo->bu_type)->orderBy(DB::raw('RAND()'))->take(3)->get();
        return view('website.build.detials-build', ['buildInfo' => $buildInfo, 'sameRent' => $sameRent, 'sameType' => $sameType]);
    }


    /**
     * User Functions
     */

    public function showUserBuild($id, Build $build)
    {
        $user = $build->find($id);
        $build = $build->where('user_id', $user->id)->orderBy('id','desc')->get();
        return view('admin.build.index', ['builds' => $build]);
    }
    public function userWaitingBuild(Build $build)
    {
        $build = $build->where('bu_status', 0)->where('user_id',auth()->user()->id)->orderBy('id','desc')->paginate(9);
        return view('website.build.all', ['builds' => $build]);
    }
    public function userBuild(Build $build)
    {
        $build = $build->where('bu_status', 1)->where('user_id',auth()->user()->id)->orderBy('id','desc')->paginate(9);
        return view('website.build.all', ['builds' => $build]);
    }

     public function userCreateBuild(){
        if(auth()->user()){
            return view('website/user-builds/add');
        }else {
            return redirect()->route('login')->withFlashMassage('You Must Login First');
        }
     }
     public function userDoneCreateBuild(){
        return view('website/user-builds/done');
     }


     public function userStoreBuild(BuildRequest $request, Build $build){
        
        $newNameForImage = null; # For If Not Have Image Set Null
        if ($request->hasFile('bu_image')) {
            $file = $request->file('bu_image');
            $newNameForImage = time().'_'.$file->getClientOriginalName();
            $file->storeAs('public/bulids', $newNameForImage);
        }
        $userId = auth()->user()->id;
        $data = [
        'bu_name'           => $request->bu_name,
        'bu_price'          => $request->bu_price,
        'bu_rent'           => $request->bu_rent,
        'bu_square'         => $request->bu_square, 
        'bu_type'           => $request->bu_type,
        'bu_rooms'          => $request->bu_rooms,
        'bu_place'          => $request->bu_place,
        'bu_image'          => $newNameForImage,
        'bu_small_des'      => strip_tags(str_limit($request->bu_small_des, 160)),
        'bu_meta'           => $request->bu_meta, 
        'bu_longitude'      => $request->bu_longitude,
        'bn_latitude'       => $request->bn_latitude,
        'bu_large_des'      => $request->bu_large_des,
        'bu_status'         => 0,
        'user_id'           => $userId,    
        ];
        $build->create($data);
        return redirect()->route('user-done-build')->withFlashMassage('Aquer Added Susscefully');
     }

}
