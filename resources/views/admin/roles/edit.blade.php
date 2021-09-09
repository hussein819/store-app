@extends('layouts.admin_layout')
@section('header_page')
    {{ __('edit role') }}
@endsection
@section('title')
    {{ __('edit role') }}
@endsection
@can('role-list')
    @section('name'){{ __('roles') }}@endsection
    @section('href'){{ route('roles.index') }}@endsection
    @endcan
    @can('role-edit')
        @section('name2'){{ __('create') }}@endsection
        @section('href2'){{ route('roles.create') }}@endsection
        @endcan
        @section('content')

            {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('name') }}</strong>
                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('permission') }}</strong>
                        <br />
                        @foreach ($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                {{__( $value->name) }}</label>
                            <br />
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </div>
            </div>
            {!! Form::close() !!}


        @endsection
