<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ContactExport;
use App\Exports\CustomerExport;
use App\Exports\ContactMessageExport;
use App\Exports\domload_affterSalreesExport;
use App\Exports\domload_affterSalreesHepaExport;
use App\Exports\WhatsappExport;
use App\Exports\SubcraptionExport;
use App\Exports\ConsultingExport;
use App\Exports\downloadJobsExport;
use App\Exports\ServresExport;
use App\Exports\AgencyExport;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\RequestSercice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function jopsIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::JOP)->orderByDesc('id')->paginate(10),
        ];
        return view('admin.Contact.JOP', $data);
    }

    public function affterSalrees()
    {

        $data = [
            'data' => DB::table('after_sales')->orderByDesc('id')->paginate(50),

        ];



        return view('admin.survey.after_sales', $data);
    }
    public function affterSalreesDeleted(Request $request)
    {


          DB::table('after_sales')->where('id',$request->id)->delete();
          return redirect()->back();
    }

    public function affterSalreesHepa()
    {

        $data = [
            'data' => DB::table('servieus_hepas')->orderByDesc('id')->paginate(50),

        ];



        return view('admin.survey.heapeserves', $data);
    }

    public function affterSalreesHepadeleted(Request $request)
    {

        DB::table('servieus_hepas')->where('id',$request->id)->delete();
        return redirect()->back();
    }


    public function affterSalreesHepaSSSSDEleted(Request $request)
    {

        DB::table('servers')->where('id',$request->id)->delete();
        return redirect()->back();
    }


    public function affterSalreesHepaSSSS()
    {

        $data = [
            'data' => DB::table('servers')->orderByDesc('id')->paginate(50),

        ];



        return view('admin.survey.servers', $data);
    }

    public function serversIndex()
    {
        $data = [
            'data' =>  DB::table('servers')->orderByDesc('id')->paginate(10),
        ];
        return view('admin.servers.index', $data);
    }
    public function whatsapp()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::WHATSAPP)->orderByDesc('id')->paginate(10),
        ];
        return view('admin.whatsapp.index', $data);
    }


      public function deletedCotacusUs($id)
    {
        Contact::destroy($id);
        toastr()->success('تم الحذف بنجاح');
        return redirect()->back();

    }

      public function deletedSubcraption($id)
    {
        RequestSercice::destroy($id);
        toastr()->success('تم الحذف بنجاح');
        return redirect()->back();

    }

    public function supcpations()
    {
        $data = [
            'data' => RequestSercice::orderBy('id', 'DESC')->paginate(10),
        ];
        return view('admin.supcpations.index', $data);
    }



    public function AgencyIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::AGENCY)->orderByDesc('id')->paginate(10),
        ];
        return view('admin.Contact.Agency', $data);
    }

    public function conteactIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::HOMECONTECT)->orderByDesc('id')->paginate(10),
        ];
        return view('admin.Contact.index', $data);
    }

    public function consultingIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::PAGECONSULTING)->orderByDesc('id')->paginate(10),
        ];
        return view('admin.Contact.consulting', $data);
    }


    public function domload_affterSalrees()
    {

        return Excel::download(new domload_affterSalreesExport, 'ContactExport.xlsx');
    }



    public function domload_affterSalreesHepa()
    {

        return Excel::download(new domload_affterSalreesHepaExport, 'ContactExport.xlsx');
    }

    public function domload_affterSalreesHepaSSSS()
    {

        return Excel::download(new domload_affterSalreesHepaSSSSExport, 'ContactExport.xlsx');
    }










    public function downloadContect()
    {

        return Excel::download(new ContactExport, 'ContactExport.xlsx');
    }
    public function downloadWhatsapp()
    {

        return Excel::download(new WhatsappExport, 'WhatsappExport.xlsx');
    }


    public function dowmnloadCustomerExport()
    {

        return Excel::download(new CustomerExport, 'CustomerExport.xlsx');
    }

    public function downloadConsultingExport()
    {

        return Excel::download(new ConsultingExport, 'ConsultingExport.xlsx');
    }
    public function downloadAgencyExport()
    {

        return Excel::download(new AgencyExport, 'AgencyExport.xlsx');
    }
    public function dowmnloadSubcraptionExport()
    {

        return Excel::download(new SubcraptionExport, 'SubcraptionExport.xlsx');
    }

    public function downloadServres()
    {

        return Excel::download(new ServresExport, 'ServresExport.xlsx');
    }

    public function downloadJobsExport()
    {

        return Excel::download(new downloadJobsExport, 'JobsExport.xlsx');
    }

    public function conteactMessageIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::PAGECONTENTUS)->orderByDesc('id')->paginate(10),
        ];
        return view('admin.Contact.contact', $data);
    }


    public function downloadMesageContect()
    {
        return Excel::download(new ContactMessageExport, 'ContactMessageExport.xlsx');
    }
}
