@extends('Layout.navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-dark mb-1">{{ __('Make Payment') }}</div>

                    <div class="card-body">
                        <form method="POST" action="#">
                            @csrf

                            <div class="form-group row text-dark mb-1">
                                <label for="amount" class="col-md-4 col-form-label text-md-right text-dark mb-1">{{ __('Amount') }}</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror text-dark mb-1" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                                    @error('amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="card_number" class="col-md-4 col-form-label text-md-right text-dark mb-1">{{ __('Card Number') }}</label>

                                <div class="col-md-6">
                                    <input id="card_number" type="text" class="form-control @error('card_number') is-invalid @enderror text-dark mb-1" name="card_number" value="{{ old('card_number') }}" required autocomplete="card_number">

                                    @error('card_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="expiry_date" class="col-md-4 col-form-label text-md-right text-dark mb-1">{{ __('Expiry Date') }}</label>

                                <div class="col-md-3">
                                    <input id="expiry_date" type="text" class="form-control @error('expiry_date') is-invalid @enderror text-dark mb-1" name="expiry_date" value="{{ old('expiry_date') }}" required autocomplete="expiry_date">

                                    @error('expiry_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label for="cvv" class="col-md-1.5 col-form-label text-md-right text-dark mb-1">{{ __('CVV') }}</label>

                                <div class="col-md-2">
                                    <input id="cvv" type="text" class="form-control @error('cvv') is-invalid @enderror text-dark mb-1" name="cvv" value="{{ old('cvv') }}" required autocomplete="cvv">

                                    @error('cvv')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Pay Now') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
