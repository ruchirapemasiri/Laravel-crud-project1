
@extends('layouts.app')

@section('content')


  <div class="container mt-1" >


          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4>Product Add</h4>

                      </div>
                      <div class="card-body">
                           <form action="{{ route('product.store') }}" method="post" enctype="multipart/form">
                              <div class="mb-1">
                                @csrf
                              <label>Product Name</label>
                              <input type="text" name="name" class="form-control">

                              <label>Product Image</label>
                              <input type="file" name="image" class="form-control">

                              <label>Product price</label>
                              <input type="text" name="price" class="form-control">

                              <label>Product status</label>
                              <input type="text" name="status" class="form-control">
                              </div>
                              <div class="mb-1">
                                  <button type="submit"  class="btn btn-primary">Add</button>
                              </div>


                          </form>
                      </div>
                  </div>
              </div>

          </div>
      </div>
      <div class="container mt-3" >


          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4>Product List</h4>

                      </div>
                            <table class="table table-success table-striped">
                                <thead>
                                     <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Price</th>
                                      <th scope="col">Image</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Action</th>
                                   </tr>
                               </thead>
                               <tbody>


                                   @foreach ($tasks as $key=> $task)
                                    <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                      <td>{{ $task->name }}</td>
                                      <td>{{ $task->price }}</td>
                                      <td>{{ $task->image }}</td>

                                      <td>
                                       @if ($task->status == 0)
                                             <span class="badge bg-danger">Not is stock</span>

                                       @else
                                            <span class="badge bg-success">In stock</span>

                                       @endif




                                      </td>
                                      <td>
                                              <a href="{{ route('product.delete',$task->id) }}" class="btn btn-danger">Delete</a>
                                              <a href="{{ route('product.done',$task->id) }}" class="btn btn-info">Update Status</a>

                                      </td>
                                   </tr>

                                   @endforeach



                             </tbody>
                         </table>




                    </div>
                  </div>
              </div>

          </div>





@endsection

@push('css')
<style>
      .page-title{
        padding: 6vh;
        font-size: 5rem;
        color: rgb(7, 93, 95);

    }
</style>

@endpush
