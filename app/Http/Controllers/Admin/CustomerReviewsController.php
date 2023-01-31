<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PDF;
use App\Models\Photo;
use App\Models\PreviousWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CustomerReviewsController extends Controller
{
//    function __construct()
//    {
//        $this->middleware('permission:show-customerReviews', ['only' => 'index', 'show']);
//        $this->middleware('permission:create-customerReviews', ['only' => 'create', 'store']);
//        $this->middleware('permission:edit-customerReviews', ['only' => 'edit', 'update']);
//        $this->middleware('permission:deleted-customerReviews', ['only' => 'destroy']);
//    }

    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\CustomerReviews',
        'route' => 'customerReviews',
        'folderBlade' => 'customerReviews',
        'folderImage' => 'customerReviews',
        'fileName' => 'test'
    ];

    public function index()
    {
        $data = [
            'data' => $this->data['Models']::with(['photo'])
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


        $data = $this->data['Models']::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'learn' => $request->learn,

            'previous_works_id' => $request->previous_id,


        ]);

        if ($file = $request->file('cover')) {
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('cover')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/pictures/' . $this->data['folderBlade'] . '/' . $data->id, $file_to_store)) {
                Photo::create([
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => $this->data['Models'],
                ]);
            }
        }


        toastr()->success('تم الحفظ بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'data' => $this->data['Models']::where('previous_works_id', $id)->with(['photo'])
                ->when(\request()->keyword != null, function ($query) {
                    $query->search(\request()->keyword);
                })
                ->when(\request()->status != null, function ($query) {
                    $query->whereStatus(\request()->status);
                })
                ->paginate(\request()->paginate ?? 20),

            'previous_Work_id' => PreviousWork::find($id),
        ];

        return view($this->data['folder'] . $this->data['folderBlade'] . '.show', $data);
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
            'name' => $request->name,
            'company_name' => $request->company_name,
            'learn' => $request->learn,

            'previous_works_id' => $request->previous_id,
        ]);


        // Inset One Photo

        if ($file = $request->file('cover')) {
            File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->id . '/' . $request->oldfile));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('cover')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;
            if ($file->move('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->id, $file_to_store)) {
                Photo::updateOrCreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => $this->data['Models'],
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => $this->data['Models'],
                ]);
            }
        }


        toastr()->success('تم التحديث بنجاح');
        return redirect()->back();

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
        if ($request->oldfile) {
            File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->id . '/' . $request->oldfile));
            Photo::where('photoable_id', $request->id)->where('photoable_type', $this->data['Models'])->delete();
        }
        toastr()->success('Done Deleted Successfully');
        return redirect()->back();
    }


    public function customerReviews_remove_image(Request $request)
    {
        $photo = PDF::findorfail($request->photo_id);
        if (File::exists('admin/bdf/customerReviews/' . $request->data_id . '/' . $photo->Filename)) {
            File::delete(public_path('admin/bdf/' . $this->data['folderBlade'] . '/' . $request->data_id . '/' . $photo->Filename));
            PDF::where('bdfable_id', $request->data_id)->where('bdfable_type', $this->data['Models'])->delete();
        };
        return true;
    }

    public function changeStatus(Request $request)
    {

        $data = $this->data['Models']::findorfail($request->user_id);
        $data->status = $request->status;
        $data->save();

        return true;

    }

    public function customerReviews_photo_remove_image(Request $request)
    {
        $photo = Photo::findorfail($request->photo_id);
        if (File::exists('admin/pictures/customerReviews/' . $request->data_id . '/' . $photo->Filename)) {
            File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->data_id . '/' . $photo->Filename));
            Photo::where('photoable_id', $request->data_id)->where('Filename', $request->photo_name)->where('photoable_type', $this->data['Models'])->delete();
        };
        return true;
    }
}
