@extends('admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-header p-4 border-bottom bg-body">
            <a class="btn btn-sm btn-phoenix-primary"
                href="{{route('admin.sliders.create')}}" role="button" aria-controls="basic-example-code" >  Create</a>
        </div>
        <div class="card-body">
            <div class="p-4 code-to-copy">
                <div id="tableExample3" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative">
                            <input class="form-control search-input search form-control-sm" type="search"
                                placeholder="Search" aria-label="Search">
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top border-translucent ps-3" data-sort="name">Id</th>
                                    <th class="w-auto">Images</th>
                                    <th class="sort text-end align-middle pe-0 border-top" scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td class="align-middle ps-3">{{ $slider->id }}</td>
                                        <td class="align-middle" style="width: 70px">
                                            @if ($slider->image)
                                                <div class="image">
                                                    <img src="{{ $slider->image }}" alt="{{ $slider->image . ' flag' }}"
                                                        class="img-fluid">
                                                </div>
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                    <span class="fas fa-ellipsis-h fs-10"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.sliders.show', $slider->id) }}">View</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.sliders.edit', $slider->id) }}">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    {{-- <a class="dropdown-item text-danger"
                                                        href="{{ route('admin.valve_categories.destroy', $slider->id) }}"
                                                        onclick="return confirm('Are you sure?')">Remove</a> --}}
                                                    <form action="{{ route('admin.sliders.destroy', $slider->id) }}"
                                                        onclick="return confirm('Are you sure?')" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" style="width: fit-content;"
                                                            class="dropdown-item text-danger">
                                                            Remove</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                        <div class="d-flex">
                            <button class="page-link" data-list-pagination="prev">
                                <span class="fas fa-chevron-left"></span>
                            </button>
                            <ul class="mb-0 pagination"></ul>
                            <button class="page-link pe-0" data-list-pagination="next">
                                <span class="fas fa-chevron-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
