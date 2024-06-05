@extends('admin.layout.master')

@section('content')
<form action="{{ route('admin.langs.update', $model->id) }}" method="POST" class="row" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
<div class="col-lg-8">
    <div class="card card-primary">
        <div class="card-body">
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"
                    id="code" value="{{ old('code', $model->code) }}">
                @error('code')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control @error('country') is-invalid @enderror"
                    id="country" value="{{ old('country', $model->country) }}">
                @error('country')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
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
