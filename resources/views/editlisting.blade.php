@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing <a href="/dashboard" class="float-right btn btn-outline-seconday btn-xs">Go Back</a></div>

                <div class="card-body">
                {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                    {{ Form::bsText('name', $listing->name,['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('website', $listing->website,['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email', $listing->email,['placeholder' => 'Company Website']) }}
                    {{ Form::bsText('phone', $listing->phone,['placeholder' => 'Company Phone']) }}
                    {{ Form::bsText('address', $listing->address,['placeholder' => 'Business Address']) }}
                    {{ Form::bsTextArea('bio', $listing->bio,['placeholder' => 'About This Business']) }}
                    {{ Form::hidden('_method', 'PUT')}}
                    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-outline-secondary']) }}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection