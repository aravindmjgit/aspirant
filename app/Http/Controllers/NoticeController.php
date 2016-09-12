<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Batch;
use DB;

class NoticeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        //Select all records from notice table    
        $allNotice = DB::table('notice')
            ->join('batch_details', 'batch_details.id', '=', 'notice.batch_id')
            ->select('notice.*', 'batch_details.batch')
            ->get();

        return View('notice.list_notice', compact('allNotice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        //Redirecting to add_notice.blade.php 
        $batch = \App\Batch::lists('batch', 'id');

        return view('notice.add_notice', compact('id', 'batch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\PublishNoticeRequest $requestData)
    {

        //store notice in notice table
        $student = new \App\Notice;
        $student->batch_id = $requestData['batch_id'];
        $student->message = $requestData['message'];
        $student->save();
        return Redirect::back()
            ->withFlashMessage('Notice Added successfully!')
            ->withType('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {

        $notice = DB::table('notice')
            ->join('batch_details', 'batch_details.id', '=', 'notice.batch_id')
            ->select('notice.*', 'batch_details.batch')
            ->where('notice.id', $id)
            ->first();

        $batch = \App\Batch::lists('batch', 'id');

        return View('notice.edit_notice', compact('notice', 'batch', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Requests\PublishNoticeRequest $requestData)
    {
        //update values in notice

        $notice = \App\Notice::find($id);
        $notice->batch_id = $requestData['batch_id'];
        $notice->message = $requestData['message'];
        $notice->save();
        return redirect()->route('Notice.index')
            ->withFlashMessage('Notice Updated successfully!')
            ->withType('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //find result by id and delete 
        \App\Notice::find($id)->delete();

        //Redirecting to index() method
        return Redirect::back();
    }

}
