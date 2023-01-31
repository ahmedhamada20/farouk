<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:show-exam', ['only' => 'index', 'show']);
    //     $this->middleware('permission:create-exam', ['only' => 'create', 'store']);
    //     $this->middleware('permission:edit-exam', ['only' => 'edit', 'update']);
    //     $this->middleware('permission:deleted-exam', ['only' => 'destroy']);
    // }

    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\Exam',
        'route' => 'exam',
        'folderBlade' => 'exam',
        'folderImage' => 'exam',
        'fileName' => 'test'
    ];

    public function index()
    {
        $data = [
            'data' => $this->data['Models']::query()
                ->when(\request()->keyword != null, function ($query) {
                    $query->search(\request()->keyword);
                })
                ->when(\request()->status != null, function ($query) {
                    $query->whereStatus(\request()->status);
                })
                ->paginate(\request()->paginate ?? 10),
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
        $this->data['Models']::create([
            'name' => ['ar' => $request->name, 'en' => $request->name_en],
            'answer_one' => ['ar' => $request->answer_one, 'en' => $request->answer_one_en],
            'answer_two' => ['ar' => $request->answer_two, 'en' => $request->answer_two_en],
            'answer_there' => ['ar' => $request->answer_there, 'en' => $request->answer_there_en],
            'answer_four' => ['ar' => $request->answer_four, 'en' => $request->answer_four_en],
            'answer' => ['ar' => $request->answer, 'en' => $request->answer_en],
            'time' => $request->time,
            'status' => $request->status,
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
            'answer_one' => ['ar' => $request->answer_one, 'en' => $request->answer_one_en],
            'answer_two' => ['ar' => $request->answer_two, 'en' => $request->answer_two_en],
            'answer_there' => ['ar' => $request->answer_there, 'en' => $request->answer_there_en],
            'answer_four' => ['ar' => $request->answer_four, 'en' => $request->answer_four_en],
            'answer' => ['ar' => $request->answer, 'en' => $request->answer_en],
            'time' => $request->time,
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




    public function changeStatus(Request $request)
    {

        $data = $this->data['Models']::findorfail($request->user_id);
        $data->status = $request->status;
        $data->save();

        return response()->json(['success' => 'Status Changed Successfully']);
    }
}
