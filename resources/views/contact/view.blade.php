@extends('admin.admin-layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Email Contact</h1>
                </div>
                <div class="card-body">
                    <h5><strong>Name :</strong> {{ $contact->name }}</h5>
                    <h5><strong>Email :</strong> {{ $contact->email }}</h5>
                    <h5><strong>Subject :</strong> {{ $contact->subject }}</h5>
                    <hr>
                    <h5><strong>Message :</strong></h5>
                    <p>{{ $contact->message }}</p>
                    <div class="row mt-3">
                        <div class="col-12 text-end">
                            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-danger"><i class='bx bx-arrow-back'></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection