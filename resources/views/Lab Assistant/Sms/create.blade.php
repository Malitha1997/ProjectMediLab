@extends('Layout.labassistantNavbar')

@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-1">Send SMS</h3>
    </div>
    <div class="d-flex justify-content-end mb-3">
        <a href="" class="btn btn-secondary">Message History</a>
</div>
    <div class="card shadow mb-3">
        <div class="card-body">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <form class="sms-form" method="POST" action="{{ route('send_sms') }}">
                {{csrf_field()}}

                <div class="row">
                    <div class="col">
                        <div class="form-group mb-3">
                            <label class="form-label text-dark mb-1" for="patient_name">Patient Name<br></label>
                            <div class="col"><input class="form-control @error('patient_name') is-invalid @enderror text-dark mb-1" type="text" id="patient_name" placeholder="John"  value="{{ old('patient_name') }}"></div>
                            <input type="hidden" name="patient_name" id='patient_nameid' >
                            @error('patient_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label text-dark mb-1" for="contact_No">Contact Number (Please start with '94')<br></label>
                            <input class="form-control @error('contact_No') is-invalid @enderror text-dark mb-1" type="tel" id="contact_No" placeholder="94xxxxxxxx" name="contact_No" value="{{ old('contact_No') }}">
                            @error('contact_No')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label text-dark mb-1" for="msg">Description</label>
                            <textarea class="form-control @error('msg') is-invalid @enderror text-dark mb-1" id="msg" name="msg">{{ old('msg') }}</textarea>
                            @error('msg')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" id="btn_save" type="submit">Send</button>
            </form>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
            $(document).ready(function(){
                $(document).on('click','#patient_name', function() {
                    var route = "{{ route('livesearch2') }}";
                    $(this).autocomplete({
                        source: function( request, response ) {
                            $.ajaxSetup({

                                headers: {

                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                                }

                            });
                           // Fetch data
                            $.ajax({
                                url:route,
                                type: 'post',
                                dataType: "json",
                                data: {
                                    query: request.term
                                },
                                success: function( data ) {
                                response( data );

                                }
                            });
                        },
                        select: function (event, ui) {
                            // Set selection
                            var id = event.target.id
                            $('#'+id).val(ui.item.label); // display the selected text
                            $('#'+id+'id').val(ui.item.value); // save selected id to input
                            return false;
                        }
                    });
                });


            });

        </script>
        </div>
    </div>
@endsection
