@extends('layouts.app')

@section('title','Slider')
@push('css')


@endpush

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

              <div class="card">
              	       @include('layouts.partial.msg')
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add Categories</h4>
                 
                </div>
                <div class="card-body">
                  <div class="card-content">
                  	<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                  		@csrf

                  		<div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Slug NAme</label>
                          <input type="text" class="form-control" name="slug">
                        </div>
                      </div>
                    </div>

                    
                    <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
                  		<button class="btn btn-primary" type="submit">Save</button>
                  	</form>
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

@endsection

@push('scripts')


@endpush