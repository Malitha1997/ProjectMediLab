@extends('Layout.navbar')


@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Add Report</h3>
    </div><button class="btn btn-primary" type="button" data-aos="fade-down" data-aos-duration="1000" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('reports.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 5px;margin-left: 5px;margin-right: 5px;"><span style="color: rgb(255, 255, 255);">Report list</span></span></a></button>

    <div class="card" data-aos="fade-down" data-aos-duration="1000">
        <form style="padding-left: 56px;margin-right: 68px;" method="post" action="{{route('reports.store')}}" enctype="multipart/form-data">
         {{csrf_field()}}

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Patient Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text"  id="patient_name" value="{{ old('patient_name') }}" required>
                    <input type="hidden" name="patient_name" id='patient_nameid' >
                    @if($errors->has('patient_name'))
                    <p class="text-danger">{{ $errors->first('patient_name') }}</p>
                    @endif</div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Doctor Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" id="doctor_name" value="{{ old('doctor_name') }}"  required>
                    <input type="hidden" name="doctor_name" id='doctor_nameid' >
                    @if($errors->has('doctor_name'))
                    <p class="text-danger">{{ $errors->first('doctor_name') }}</p>
                    @endif</div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Lab Assistant Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" id="lab_assistant_name" value="{{ old('lab_assistant_name') }}" required>
                    <input type="hidden" name="lab_assistant_name" id='lab_assistant_nameid' >
                    @if($errors->has('lab_assistant_name'))
                    <p class="text-danger">{{ $errors->first('lab_assistant_name') }}</p>
                    @endif</div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Description</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="description" value="{{ old('description') }}" required>
                    @if($errors->has('description'))
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                    @endif</div>
            </div>


            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Report File </label></div>


                    <div class="col">
                        <input class="form-control text-dark mb-1" type="file" name="report_file" value="{{ old('report_file') }}" required>
                        @if($errors->has('report_file'))
                        <p class="text-danger">{{ $errors->first('report_file') }}</p>
                        @endif
                    </div>
                </div>
                <button class="btn btn-primary" id="btn_save" type="submit">Save</button>
            </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $(document).ready(function(){
        $(document).on('click','#doctor_name', function() {
            var route = "{{ route('livesearch') }}";
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

    $(document).ready(function(){
        $(document).on('click','#lab_assistant_name', function() {
            var route = "{{ route('livesearch3') }}";
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
@endsection
