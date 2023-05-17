@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Add Color
                        <a href="{{ url('admin/colors') }}" class="btn btn-success btn-sm text-white float-end">
                            Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/colors/createcolor') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Color Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Color Code</label>
                            <input type="text" name="code" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Status</label> <br>
                            <input name="status" type="checkbox"
                                style="width: 30px;height:30px;">checked=hidden,unchecked=visiable
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
