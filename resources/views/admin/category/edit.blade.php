@extends('layouts.app')

@section('title','Category')

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
                  <h4 class="card-title ">Add Category</h4>
                 
                </div>
                <div class="card-body">
                  <div class="card-content">
                            <form method="POST" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Category Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Slug Name</label>
                                            <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush