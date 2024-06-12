@extends('admin.layout.master')

@section('content')
<form action="{{ route('admin.sliders.update', $model->id) }}" method="POST" class="row" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
<div class="col-lg-8">
    <div class="card card-primary">
        <div class="card-body">

            <div class="form-group d-flex">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                    id="image" value="{{ old('image') }}">
                @error('image')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
</form>
@endsection
