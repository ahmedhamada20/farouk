<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\MeetingZoom;
use Illuminate\Http\Request;

class ZoomController extends Controller
{
    use MeetingZoom;
    // function __construct()
    // {
    //     $this->middleware('permission:show-aboutUs', ['only' => 'index', 'show']);
    //     $this->middleware('permission:create-aboutUs', ['only' => 'create', 'store']);
    //     $this->middleware('permission:edit-aboutUs', ['only' => 'edit', 'update']);
    //     $this->middleware('permission:deleted-aboutUs', ['only' => 'destroy']);
    // }

    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\Zoom',
        'route' => 'zoom',
        'folderBlade' => 'zoom',
        'folderImage' => 'zoom',
        'fileName' => 'test'
    ]; 

    public function index()
    {
        $data = [
            'data' => $this->data['Models']::query()
                ->when(\request()->keyword != null, function ($query) {
                    $query->search(\request()->keyword);
                })->paginate(\request()->paginate ?? 10),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->data['folder'] . $this->data['folderBlade'] . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $meeting = $this->createMeeting($request);
   

        $data = $this->data['Models']::create([
            'meeting_id' => $meeting->id,
            'topic' => $meeting->topic,
            'start_at' => $meeting->start_time,
            'duration' => $meeting->duration,
            'password' => $meeting->password,
            'start_url' => $meeting->start_url,
            'join_url' => $meeting->join_url,
            'user_id' => auth()->user()->id,

        ]);



        toastr()->success('تم الحفظ بنجاح');
        return redirect($this->data['route']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'data' => $this->data['Models']::findorfail($id),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $this->data['Models']::findorfail($request->id);
        $data->update([
            'name' => ['ar' => $request->name, 'en' => $request->name_en],
            'notes' => ['ar' => $request->notes, 'en' => $request->notes_en],

        ]);

       
   

        toastr()->success('تم التحديث بنجاح');
        return redirect($this->data['route']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(Request $request)
    {
        $this->data['Models']::destroy($request->id);
       
        toastr()->success('Done Deleted Successfully');
        return redirect($this->data['route']);
    }


  

 

  
}
