@extends('admin.layout.master')

@section('content')
    <form action="{{ route('admin.sliders.store') }}" method="POST" class="row" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-7">
            <div class="card card-primary">
                <div class="card-body table_of_langs">

                    <div class="form-group d-flex">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                            id="image" value="image">
                        @error('image')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
@endsection
