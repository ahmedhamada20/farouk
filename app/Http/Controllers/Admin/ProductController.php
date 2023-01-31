<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\PDF;
use App\Models\Photo;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:show-Product',['only'=>'index','show']);
        $this->middleware('permission:create-Product',['only'=>'create','store']);
        $this->middleware('permission:edit-Product',['only'=>'edit','update']);
        $this->middleware('permission:deleted-Product',['only'=>'destroy']);
    }

    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\Product',
        'route' => 'product',
        'folderBlade' => 'product',
        'folderImage' => 'product',
        'fileName' => 'test'
    ];

    public function index()
    {
        $data = [
            'data' => $this->data['Models']::with(['photo', 'pdf'])
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
            'name' => ['ar' => $request->name, 'en' => $request->name_en],
            'notes' => ['ar' => $request->notes, 'en' => $request->notes_en],
            'status' => $request->status,
            'url' => $request->url,
            'price' => $request->price,

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
        if ($request->hasfile('FilenameMany')) {
            foreach ($request->file('FilenameMany') as $file) {
                $name = $file->getClientOriginalName();
                $file->move('admin/pictures/' . '/' . $this->data['folderBlade'] . '/' . $data->id, $file->getClientOriginalName());

                // Inset Date
                Photo::create([
                    'Filename' => $name,
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
            'url' => $request->url,
            'price' => $request->price,
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
        if ($request->hasfile('FilenameMany')) {
            foreach ($request->file('FilenameMany') as $file) {
                $name = $file->getClientOriginalName();
                $file->move('admin/pictures/' . '/' . $this->data['folderBlade'] . '/' . $data->id, $file->getClientOriginalName());

                // Inset Date
                Photo::create([
                    'Filename' => $name,
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
        $this->data['Models']::destroy($request->id);
        if ($request->oldfile) {
            File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->id . '/' . $request->oldfile));
            Photo::where('photoable_id', $request->id)->where('photoable_type', $this->data['Models'])->delete();
        }
        toastr()->success('Done Deleted Successfully');
        return redirect($this->data['route']);
    }


    public function product_remove_image(Request $request)
    {
        $photo = PDF::findorfail($request->photo_id);
        if (File::exists('admin/bdf/product/' . $request->data_id . '/' . $photo->Filename)) {
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

    public function product_photo_remove_image(Request $request)
    {
        $photo = Photo::findorfail($request->photo_id);
        if (File::exists('admin/pictures/product/' . $request->data_id . '/' . $photo->Filename)) {
            File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->data_id . '/' . $photo->Filename));
            Photo::where('photoable_id', $request->data_id)->where('Filename', $request->photo_name)->where('photoable_type', $this->data['Models'])->delete();
        };
        return true;
    }
}
