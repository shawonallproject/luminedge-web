@extends('admin.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{URL::to('admin/profile/update')}}" method="post">
                @csrf
                <div class="col-md-12" style="display: flex">
                    <div class="col-md-3">
                        <img style="width: 100%;" src="{{URL::to('public/asset/admin/assets/images/avatars/avatar.png')}}" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Enter Name" value="{{ $user->name }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Enter email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                       placeholder="Confirm Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                    </div>
                </div>



            </form>
        </div>

    </div>


@endsection

{{--@push('custom_scripts')--}}
{{--@endpush--}}
