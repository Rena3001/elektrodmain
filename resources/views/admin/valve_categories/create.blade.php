@extends('admin.layout.master')

@section('content')

    <form action="{{ route('admin.valve_categories.store') }}" method="POST" class="row">
        @csrf
        <div class="col-lg-8">
             @if($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-underline fs-9" id="myTab" role="tablist">
                        @foreach ($langs as $key => $lang)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $key === 0 ? 'active' : '' }} @error('title.' . $lang->code) title-danger @enderror"
                                    id="{{ $lang->code . 'valve_categories' }}" data-bs-toggle="tab"
                                    href="#{{ 'valve_categories' . $lang->code }}" role="tab"
                                    aria-controls="{{ 'valve_categories' . $lang->code }}"
                                    aria-selected="{{ $key === 0 ? 'true' : 'false' }}">{{ 'Valve Category [' . strtoupper($lang->code) . ']' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content mt-3" id="myTabContent">
                        @foreach ($langs as $key => $lang)
                            <div class="tab-pane fade {{ $key === 0 ? 'active show' : '' }}"
                                id="{{ 'valve_categories' . $lang->code }}" role="tabpanel"
                                aria-labelledby="{{ $lang->code . 'valve_categories' }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title_{{ $lang->code }}">title {{ strtoupper($lang->code) }}</label>
                                        <input type="text"
                                            class="form-control @error('title.' . $lang->code) is-invalid @enderror"
                                            id="title_{{ $lang->code }}" name="title[{{ $lang->code }}]"
                                            value="{{ old('title.' . $lang->code) }}">
                                        @error('title.' . $lang->code)
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
