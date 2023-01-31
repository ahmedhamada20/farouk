<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Customer;
use App\Models\NumberBlog;
use App\Models\NumberService;
use App\Models\Packages;
use App\Models\RequestSercice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Sitemap\SitemapGenerator;


class HomeController extends Controller
{
    public function index()
    {

        // SitemapGenerator::create('https://faroukgroup.com/')->writeToFile('public');

//        SitemapGenerator::create('https://faroukgroup.com/')->getSitemap()->writeToDisk('public', 'sitemap.xml');
        return view('front.index');
    }


    public function servery1()
    {
        return view('front.servrey.servery1hepa.index');
    }


    public function surveyaftersale()
    {
        return view('front.servrey.surveyaftersale.index');
    }


    public function marketing_needs_post(Request $request)
    {
        DB::table('servers')->insert([
            'name_1' => $request->name_1,
            'name_2' => $request->name_2,
            'name_3' => $request->name_3,
            'name_4' => $request->name_4,
            'name_5' => $request->name_5,
            'name_6' => $request->name_6,
            'name_7' => $request->name_7,
            'name_8' => $request->name_8,
            'name_9' => $request->name_9,
            'name_10' => $request->name_10,
            'name_11' => $request->name_11,
            'name_12' => $request->name_12,
            'name_13' => $request->name_13,
            'name_14' => $request->name_14,
            'name_15' => $request->name_15,
            'name_16' => $request->name_16,
            'name_17' => $request->name_17,
            'name_18' => $request->name_18,
            'name_19' => $request->name_19,
            'name_20' => $request->name_20,
            'name_21' => $request->name_21,
            'name_22' => $request->name_22,
            'name_23' => $request->name_23,
            'name_24' => $request->name_24,
            'name_25' => $request->name_25,
            'name_26' => $request->name_26,
            'name_27' => $request->name_27,
            'server_1' => $request->server_1,
            'server_2' => $request->server_2,
            'server_3' => $request->server_3,
            'server_4' => $request->server_4,
            'server_5' => $request->server_5,
            'server_6' => $request->server_6,
            'server_7' => $request->server_7,
            'server_8' => $request->server_8,
            'server_9' => $request->server_9,
            'server_10' => $request->server_10,
            'server_11' => $request->server_11,
            'server_12' => $request->server_12,
            'server_13' => $request->server_13,
            'server_14' => $request->server_14,
            'server_15' => $request->server_15,
            'server_16' => $request->server_16,
            'server_17' => $request->server_17,
            'server_18' => $request->server_18,
            'server_19' => $request->server_19,
            'server_20' => $request->server_20,
            'server_21' => $request->server_21,
            'server_22' => $request->server_22,
            'server_23' => $request->server_23,
            'server_24' => $request->server_24,
            'server_25' => $request->server_25,
            'server_26' => $request->server_26,
            'server_27' => $request->server_27,
            'name' => $request->name,
            'created_at' =>date('Y-m-d'),
        ]);

        return redirect()->back()->with(['success' => 'شكرا  ']);

    }

    public function servery1_needs_post(Request $request)
    {
//dd($request->all());

        DB::table('servieus_hepas')->insert([
            'name' => $request->name ?? null,
            'server' => $request->serverasdasdsad ?? null,
            'name_4' => $request->name_4 ?? null,
            'server_4' => $request->server_4 ?? null,
            'name_5' => $request->name_5 ?? null,
            'server_5' => $request->server_5 ?? null,
            'name_6' => $request->name_6 ?? null,
            'server_6' => $request->server_6 ?? null,
            'name_7' => $request->name_7 ?? null,
            'server_7' => $request->server_7 ?? null,
            'phone' => $request->phone ?? null,
            'server_phone' => $request->server_phone ?? null,
            'name_1' => $request->name_1 ?? null,
            'server_1' => $request->server_1 ?? null,
            'name_2' => $request->name_2 ?? null,
            'server_2' => $request->server_2 ?? null,
            'server_3' => $request->server_3 ?? null,
            'name_3' => $request->name_3 ?? null,
            'created_at' =>date('Y-m-d'),

        ]);


        return redirect()->back()->with(['success' => 'شكرا  ']);

    }
    public function surveyaftersalePost(Request $request)
    {
//dd($request->all());

        DB::table('after_sales')->insert([
            'name' => $request->name,
            'server_phone' => $request->server_phone,
            'name_1' => $request->name_1,
            'server_1' => $request->server_1,
            'name_2' => $request->name_2,
            'server_2' => $request->server_2,
            'answer_server_2' => $request->answer_server_2,
            'name_3' => $request->name_3,
            'server_3' => $request->server_3,
            'answer_server_3' => $request->answer_server_3,
            'name_4' => $request->name_4,
            'server_4' => $request->server_4,
            'answer_server_4' => $request->answer_server_4,
            'name_5' => $request->name_5,
            'server_5' => $request->server_5,
            'answer_server_5' => $request->answer_server_5,
            'created_at' =>date('Y-m-d'),

        ]);


        return redirect()->back()->with(['success' => 'شكرا  ']);

    }


    public function subscriptionsPost(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|min:2|max:255',
            'phone' => 'required',
            'jobs' => 'required|min:2|max:255',
            'country' => auth('customer')->check() ? '' : 'required',
            'g-recaptcha-response' => 'required|captcha',
        ], [

            'g-recaptcha-response.required' => 'يجب تحديد انك ليس روبرت',
            'g-recaptcha-response.captcha' => 'يجب تحديد انك ليس روبرت',

        ]);


        DB::beginTransaction();

        try {

            $subscription = RequestSercice::create([
                'courses_id' => $request->courses_id,
                'packages_id' => $request->packages_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'jobs' => $request->jobs,
                'country' => $request->country,
                'customer_id' => auth('customer')->check() ? auth('customer')->user()->id : null
            ]);

            if (!auth('customer')->check()) {
                $data = Customer::create([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'address' => 'no',
                    'password' => Hash::make($request->phone),
                    'type' => 'waiting',
                ]);
            }


            if (!auth('customer')->check()) {
                RequestSercice::findorfail($subscription->id)->update([
                    'customer_id' => $data->id,
                ]);
            }

            DB::commit();
            return redirect()->route('home')->with(['success' => __('index.sendsuccessfullyMessage')]);

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => 'يوجد بيانات مسجلة من قبل ، برجاء ادخال بيانات جديدة ']);
        }


    }


    public function marketing_needs()
    {
        return view('front.servrey.marketing_needs.index');
    }

    public function subscriptions($id, $package)
    {

        $data = [
            'services' => Course::findorfail($id),
            'package' => Packages::findorfail($package),
        ];

        return view('front.subscriptions.index', $data);
    }

    public function blogDetails($name)
    {

        $the_company = Blog::where('name->' . app()->getLocale(), str_replace('-', ' ', $name))->first();
        if (NumberBlog::where('blog_id', $the_company->id)->first()) {
            $blog = NumberBlog::where('blog_id', $the_company->id)->first();
            $blog->number = $blog->number + 1;
            $blog->save();
        } else {
            NumberBlog::create([
                'blog_id' => $the_company->id,
                'number' => 1,
            ]);
        }

        $blog = Blog::findorfail($the_company->id);
        return view('front.blog.index', compact('blog'));
    }

    public function aboutUs()
    {
        return view('front.aboutUs.index');
    }

    public function Agency()
    {
        return view('front.agency.index');
    }

    public function contactUs()
    {
        return view('front.contactUs.index');
    }

    public function consulting()
    {
        return view('front.consulting.index');
    }

    public function services()
    {
        return view('front.services.index');
    }

    public function servicesDetails($id)
    {


        $the_company = Category::where('name->' . app()->getLocale(), str_replace('-', ' ', $id))->first();

        // dd($the_company);
        if (NumberService::where('category_id', $the_company->id)->first()) {
            $category = NumberService::where('category_id', $the_company->id)->first();
            $category->number = $category->number + 1;
            $category->save();
        } else {
            NumberService::create([
                'category_id' => $the_company->id,
                'number' => 1,
            ]);
        }
        $data = Course::where('category_id', $the_company->id)->first();
        return view('front.services.details', compact('data'));
    }

    public function contact()
    {
        return view('front.contact.index');
    }

    public function sendmessage(Request $request)
    {


        $request->validate([
            'name' => auth('customer')->check() ? '' : 'required|min:2|max:200',
            'activity' => 'required|min:2|max:255',
            'name_comppany' => 'required|min:2|max:255',
            'vehicle1' => 'required',
            'Message' => 'nullable|min:2',
            'phone' => auth('customer')->check() ? '' : 'required|min:11|numeric',
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'name.required' => __('index.namerequired'),
            'name.min' => __('index.namemin'),
            'name.max' => __('index.namemax'),

            'activity.required' => __('index.activityrequired'),
            'activity.min' => __('index.activitymin'),
            'activity.max' => __('index.activitymax'),

            'name_comppany.required' => __('index.name_comppanyrequired'),
            'name_comppany.min' => __('index.name_comppanymin'),
            'name_comppany.max' => __('index.name_comppanymax'),


            'g-recaptcha-response.required' => 'يجب تحديد انك ليس روبرت',
            'g-recaptcha-response.captcha' => 'يجب تحديد انك ليس روبرت',
            'vehicle1.required' => 'يجب الاختيار من القائمة',
            'Message.required' => __('index.Messagerequired'),
            'Message.min' => __('index.Messagemin'),

            'phone.required' => __('index.phonerequired'),
            'phone.min' => __('index.phonemin'),
            'phone.numeric' => __('index.phonenumeric'),
        ]);

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'activity' => $request->activity,
            'name_comppany' => $request->name_comppany,
            'type_company' => $request->country,
            'Message' => $request->Message,
            'notes' => implode(',', $request['vehicle1']),
            'type_contact' => Contact::HOMECONTECT,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }


    public function submitNumber(Request $request)
    {
        $request->validate([

            'phone' => 'required|numeric',

        ], [

            'phone.required' => __('index.phonerequired'),
            'phone.min' => __('index.phonemin'),
            'phone.numeric' => __('index.phonenumeric'),
        ]);

        Contact::create([
            'phone' => $request->phone,
            'type_contact' => Contact::WHATSAPP,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }


    public function sendConsulting(Request $request)
    {

        $request->validate([
            'name' => auth('customer')->check() ? '' : 'required|min:2|max:200',
            'phone' => auth('customer')->check() ? '' : 'required|min:11|numeric',
            'activity' => 'required|min:2|max:255',
            'type_company' => auth('customer')->check() ? '' : 'required',
            'data' => 'required',

            'Message' => 'required|min:2',
            'g-recaptcha-response' => 'required|captcha',

        ], [
            'name.required' => __('index.namerequired'),
            'name.min' => __('index.namemin'),
            'name.max' => __('index.namemax'),

            'activity.required' => __('index.activityrequired'),
            'activity.min' => __('index.activitymin'),
            'activity.max' => __('index.activitymax'),

            'name_comppany.required' => __('index.name_comppanyrequired'),
            'name_comppany.min' => __('index.name_comppanymin'),
            'name_comppany.max' => __('index.name_comppanymax'),

            'data.required' => __('index.type_companyrequired'),
            'time.required' => __('index.type_companyrequired'),
            'g-recaptcha-response.required' => 'يجب تحديد انك ليس روبت',

            'Message.required' => __('index.Messagerequired'),
            'Message.min' => __('index.Messagemin'),

            'phone.required' => __('index.phonerequired'),
            'phone.min' => __('index.phonemin'),
            'phone.numeric' => __('index.phonenumeric'),
        ]);

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'activity' => $request->activity,
            'name_comppany' => $request->name_comppany,
            'type_company' => $request->country,
            'data' => $request->data,

            'Message' => $request->Message,
            'notes' => $request->country,
            'type_contact' => Contact::PAGECONSULTING,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }


    public function sendcontect(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|email|min:2|max:255',
            'subject' => 'required|min:2|max:255',
            'phone' => 'required|min:11|numeric',
            'name_comppany' => 'required|min:2',
            'message' => 'nullable|min:2',
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'name.required' => __('index.namerequired'),
            'name.min' => __('index.namemin'),
            'name.max' => __('index.namemax'),

            'email.required' => __('index.emailrequired'),
            'email.min' => __('index.emailmin'),
            'email.max' => __('index.emailmax'),
            'email.email' => __('index.emailemail'),

            'subject.required' => __('index.subjectrequired'),
            'subject.min' => __('index.subjectmin'),
            'subject.max' => __('index.subjectmax'),

            'g-recaptcha-response.required' => 'يجب تحديد انك ليس روبرت',
            'g-recaptcha-response.captcha' => 'يجب تحديد انك ليس روبرت',
            'phone.required' => __('index.phonerequired'),
            'phone.min' => __('index.phonemin'),
            'phone.numeric' => __('index.phonenumeric'),

            'message.required' => __('index.Messagerequired'),
            'message.min' => __('index.Messagemin'),
        ]);

        Contact::create([
            'name' => $request->name . $request->name_laset,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'Message' => $request->message,
            'type_company' => $request->country,
            'name_comppany' => $request->name_comppany,
            'type_contact' => Contact::PAGECONTENTUS,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }


    public function sendAgency(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|email|min:2|max:255',
            'subject' => 'required|min:2|max:255',
            'phone' => 'required|min:11|numeric',
            'name_comppany' => 'required|min:2',
            'message' => 'required|min:2',
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'name.required' => __('index.namerequired'),
            'name.min' => __('index.namemin'),
            'name.max' => __('index.namemax'),

            'email.required' => __('index.emailrequired'),
            'email.min' => __('index.emailmin'),
            'email.max' => __('index.emailmax'),
            'email.email' => __('index.emailemail'),

            'subject.required' => __('index.subjectrequired'),
            'subject.min' => __('index.subjectmin'),
            'subject.max' => __('index.subjectmax'),

            'g-recaptcha-response.required' => 'يجب تحديد انك ليس روبرت',
            'g-recaptcha-response.captcha' => 'يجب تحديد انك ليس روبرت',
            'phone.required' => __('index.phonerequired'),
            'phone.min' => __('index.phonemin'),
            'phone.numeric' => __('index.phonenumeric'),

            'message.required' => __('index.Messagerequired'),
            'message.min' => __('index.Messagemin'),
        ]);

        Contact::create([
            'name' => $request->name . $request->name_laset,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'Message' => $request->message,
            'type_company' => $request->country,
            'name_comppany' => $request->name_comppany,
            'type_contact' => Contact::AGENCY,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }


    public function sendJop(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|email|min:2|max:255',
            'subject' => 'required|min:2|max:255',
            'phone' => 'required|min:11|numeric',
            'name_comppany' => 'required|min:2',
            'image' => 'required|max:2055',
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'name.required' => __('index.namerequired'),
            'name.min' => __('index.namemin'),
            'name.max' => __('index.namemax'),

            'email.required' => __('index.emailrequired'),
            'email.min' => __('index.emailmin'),
            'email.max' => __('index.emailmax'),
            'email.email' => __('index.emailemail'),

            'g-recaptcha-response.required' => 'يجب تحديد انك ليس روبرت',
            'g-recaptcha-response.captcha' => 'يجب تحديد انك ليس روبرت',
            'subject.required' => __('index.subjectrequired'),
            'subject.min' => __('index.subjectmin'),
            'subject.max' => 'حجم الملف كبير جدا ',

            'phone.required' => __('index.phonerequired'),
            'phone.min' => __('index.phonemin'),
            'phone.numeric' => __('index.phonenumeric'),

            'message.required' => __('index.Messagerequired'),
            'message.min' => __('index.Messagemin'),
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
        }
        $new = new Contact();
        $new->name = $request->name . $request->name_laset;
        $new->email = $request->email;
        $new->subject = $request->subject;
        $new->phone = $request->phone;
        $new->type_company = $request->country;
        $new->name_comppany = $request->name_comppany;
        $new->image = $filename;
        $new->type_contact = Contact::JOP;
        $new->save();


        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }
}
