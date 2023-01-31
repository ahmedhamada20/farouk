<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PDF;
use App\Models\Photo;
use App\Models\Question;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:show-course', ['only' => 'index', 'show']);
        $this->middleware('permission:create-course', ['only' => 'create', 'store']);
        $this->middleware('permission:edit-course', ['only' => 'edit', 'update']);
        $this->middleware('permission:deleted-course', ['only' => 'destroy']);
    }

    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\Course',
        'route' => 'course',
        'folderBlade' => 'course',
        'folderImage' => 'course',
        'fileName' => 'test'
    ];

    public function index()
    {
        $data = [
            'data' => $this->data['Models']::with(['photo', 'pdf','category'])
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
        $data = [
            'categories' => Category::whereStatus(true)->get(),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request->all());

        $data = $this->data['Models']::create([
            'name' => ['ar' => $request->name, 'en' => $request->name_en],
            'notes' => ['ar' => $request->notes, 'en' => $request->notes_en],
            'notes1' => ['ar' => $request->notes1, 'en' => $request->notes1_en],
            'notes2' => ['ar' => $request->notes2, 'en' => $request->notes2_en],
            'status' => $request->status,
            'url' => $request->url,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

        Seo::UpdateOrcreate([
            'seoable_type'=> $this->data['Models'],
            'seoable_id' => $data->id,
        ],[
            'seoable_type'=> $this->data['Models'],
            'seoable_id' => $data->id,
            'notes' => $request->seo
        ]);

        // Insert Many Photos
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

        // bdf
        if ($file = $request->file('bdf')) {
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('bdf')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/bdf/' . $this->data['folderBlade'] . '/' . $data->id, $file_to_store)) {
                PDF::create([
                    'Filename' => $file_to_store,
                    'pdfable_type' => $this->data['Models'],
                    'pdfable_id' => $data->id,
                ]);
            }
        }


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
            'categories' => Category::whereStatus(true)->get(),
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
            'notes1' => ['ar' => $request->notes1, 'en' => $request->notes1_en],
            'notes2' => ['ar' => $request->notes2, 'en' => $request->notes2_en],
            'url' => $request->url,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

        Seo::UpdateOrcreate([
            'seoable_type'=> $this->data['Models'],
            'seoable_id' => $data->id,
        ],[
            'seoable_type'=> $this->data['Models'],
            'seoable_id' => $data->id,
            'notes' => $request->seo
        ]);


        // Inset One Photo

        // Insert Many Photos
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


        if ($file = $request->file('bdf')) {
            File::delete(public_path('admin/bdf/' . $this->data['folderBlade'] . '/' . $request->id . '/' . $request->old_bdf_file));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('bdf')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;
            if ($file->move('admin/bdf/' . $this->data['folderBlade'] . '/' . $request->id, $file_to_store)) {
                PDF::updateOrCreate([
                    'pdfable_type' => $this->data['Models'],
                    'pdfable_id' => $data->id,
                ], [
                    'Filename' => $file_to_store,
                    'pdfable_type' => $this->data['Models'],
                    'pdfable_id' => $data->id,
                ]);
            }
        }

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


        if (Question::where('courses_id',$request->id)->first()){
            toastr()->error('Error Deleted Place Deleted Question\'s First');
            return redirect($this->data['route']);
        }else{
            $this->data['Models']::destroy($request->id);
            if ($request->oldfile) {
                File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->id . '/' . $request->oldfile));
                Photo::where('photoable_id', $request->id)->where('photoable_type', $this->data['Models'])->delete();
            }
            toastr()->success('Done Deleted Successfully');
            return redirect($this->data['route']);
        }


    }


    public function course_remove_image(Request $request)
    {
        $photo = PDF::findorfail($request->photo_id);
        if (File::exists('admin/bdf/course/' . $request->data_id . '/' . $photo->Filename)) {
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

    public function course_photo_remove_image(Request $request)
    {
        $photo = Photo::findorfail($request->photo_id);
        if (File::exists('admin/pictures/course/' . $request->data_id . '/' . $photo->Filename)) {
            File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->data_id . '/' . $photo->Filename));
            Photo::where('photoable_id', $request->data_id)->where('Filename', $request->photo_name)->where('photoable_type', $this->data['Models'])->delete();
        };
        return true;
    }
}
