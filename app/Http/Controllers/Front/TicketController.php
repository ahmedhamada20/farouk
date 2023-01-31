<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Ticket;
use App\Models\Course;
use App\Models\TicketReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'data' => Ticket::whereCustomerId(auth()->user()->id)->get(),
        ];

        return view('front.loginuser.tickets.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereStatus(true)->get();
        return view('front.loginuser.tickets.create', compact('categories'));
    }


    public function ticketsReply(Request $request)
    {

        DB::beginTransaction();
        try {
            $updated = Ticket::findorfail($request->ticket_id);
            $updated->status = 'review';
            $updated->customer_id = auth()->user()->id;
            $updated->save();

            TicketReply::create([
                'ticket_id' => $request->ticket_id,
                'customer_id' => auth()->user()->id,
                'message' => $request->message,
            ]);
            DB::commit();
            return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function store(TicketRequest $request)
    {

        $data = Ticket::create([
            "customer_id" => auth()->user()->id,
            "ticketNumbers" => $request->ticketNumbers,
            "category_id" => $request->category_id,
            "status" => 'padding',
            "message" => $request->message,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Ticket::where('ticketNumbers',$id)->first();
        return view('front.loginuser.tickets.show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
