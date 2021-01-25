@extends('layouts.mainLayout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Create New Post</div>

                <div class="card-body">
                    <form method="{{ isset($customer) ? 'PUT' : 'POST' }}" onsubmit="customerFormSubmitted(event)"
                        action="{{ isset($customer) ? route('customers.update', $customer->personal_id) : route('customers.store') }}"
                        enctype="multipart/form-data">

                        @csrf
    

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Enter Customer Name</label>

                            <div class="col-md-6">
                                <input id="customer_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ isset($customer) ? $customer->name : old('name') }}" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="personal_id" class="col-md-4 col-form-label text-md-right">Enter Personal ID</label>

                            <div class="col-md-6">
                                <input type="text" id="customer_personal_id" class="form-control @error('personal_id') is-invalid @enderror" name="personal_id"
                                    value="{{ isset($customer) ? $customer->personal_id : old('personal_id') }}" autocomplete="personal_id" autofocus>

                                @error('personal_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Email</label>

                            <div class="col-md-6">
                                <input type="email" id="customer_email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ isset($customer) ? $customer->customer_contact_information->email : old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Enter Phone</label>

                            <div class="col-md-6">
                                <input type="text" id="customer_phone" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ isset($customer) ? $customer->customer_contact_information->phone : old('phone') }}" autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ isset($customer) ? 'Update' : 'Create New' }} Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function refreshCustomerTable() {
        load(location.href="/customers");
    }
        function customerFormSubmitted(e) {
            e.preventDefault();

            $.ajax({
                url: e.target.getAttribute('action'),
                type: e.target.getAttribute('method'),
                data: {
                    name: $('#customer_name').val()
                    personal_id: $('#customer_personal_id').val()
                    email: $('#customer_email').val()
                    phone: $('#customer_phone').val()
                },
                success: function(data) {
                    refreshCustomerTable();
                }
            })
        }

    </script>
@endsection
