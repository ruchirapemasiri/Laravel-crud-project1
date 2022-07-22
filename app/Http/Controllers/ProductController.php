<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
;

class ProductController extends Controller
{
    protected $task;
    public function __construct(){

      $this->task = new Product();





    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $response['tasks']=$this->task->all();


        return view('pages.product.index')->with( $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->task->create($request->all());

        return redirect()->back();

       // return redirect()->route('product.store.view');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($task_id)
    {
        $task=$this->task->find($task_id);
        $task->delete();

        return redirect()->back();

    }

     public function done($task_id)
    {
        $task=$this->task->find($task_id);
        if($task->status==0){
             $task->status=1;


        }
        else if($task->status==1){

             $task->status=0;
        }




        $task->update();




        //$task->status=1;



        return redirect()->back();

    }

      public function view()
    {
        return view('pages.product.view');
    }
}
