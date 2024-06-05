@extends('admin.layout.master')

@section('content')
    <form action="{{ route('admin.language_line.update', $model->id) }}" method="POST" class="row">
        @csrf
        @method('PATCH')
        <div class="col-lg-8">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        @foreach ($langs as $key => $lang)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $key === 0 ? 'active' : '' }} @error('text.' . $lang->code) text-danger @enderror"
                                id="{{ $lang->code . 'language_line' }}" data-bs-toggle="tab"
                                href="#{{ 'language_line' . $lang->code }}" role="tab"
                                aria-controls="{{ 'language_line' . $lang->code }}"
                                aria-selected="{{ $key === 0 ? 'true' : 'false' }}">{{ 'Language Line [' . strtoupper($lang->code) . ']' }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        @foreach ($langs as $key => $lang)
                            <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}"
                                id="{{ 'language_line' . $lang->code }}" role="tabpanel"
                                aria-labelledby="custom-tabs-four-home-tab">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="text.{{ $lang->code }}">Text</label>
                                        <input type="text"
                                            class="form-control  @error('text.' . $lang->code) is-invalid @enderror"
                                            id="text.{{ $lang->code }}" name="text[{{ $lang->code }}]"
                                            value="{{ old('text' . '.' . $lang->code, isset($model->text[$lang->code]) ? $model->text[$lang->code] : '') }}">
                                        @error('text.' . $lang->code)
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label for="group">Group</label>
                        <input type="text" name="group" class="form-control @error('group') is-invalid @enderror"
                            id="group" value="{{ old('group', $model->group) }}">
                        @error('group')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="key">Key</label>
                        <input type="text" name="key" class="form-control @error('key') is-invalid @enderror"
                            id="key" value="{{ old('key', $model->key) }}">
                        @error('key')
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
