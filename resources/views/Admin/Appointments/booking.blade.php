@extends('Layout.navbar')

@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Add Appointment</h3>
</div>
<button class="btn btn-primary" data-aos="fade-down" data-aos-duration="1000" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('appointments.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Appointment list</span></span></a></button>
<div class="card" data-aos="fade-in" data-aos-duration="1000">
    <form style="padding-left: 56px;margin-right: 68px;" method="POST" action="{{route('appointments.store')}}" data-aos="fade-in" data-aos-duration="1000">
     {{csrf_field()}}
                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1">Patient Name</lable></div>
                    <div class="col"><input class="form-control text-dark mb-1" type="text" name="patient_name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1" >Doctor Name</lable></div>
                    <div class="col"><input class="form-control text-dark mb-1" id="doctor_name" type="text" placeholder="Search doctor.." required>
                        <input type="hidden" name="doctor_name" id="doctor_nameid">
                    </div>
                </div>



                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1">Appointment Date</lable></div>
                    <div class="col"><input class="form-control text-dark mb-1" id="date" type="text" placeholder="Search doctor.." required>
                        <input type="hidden" name="date" id="date">
                    </div>
                </div>

                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1" >Appointment Time</label></div>
                    <div class="col"><input class="form-control text-dark mb-1" id="time" type="text" placeholder="Search doctor.." required>
                        <input type="hidden" name="time" id="time">
                    </div>
                </div>

                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1" >Description</label></div>
                    <div class="col">
                        <input class="form-control text-dark mb-1" type="text" name="description" required>
                    </div>
                </div>

</div>
<button class="btn btn-primary" id="btn_save" type="submit">Book Appointment</button>

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('click', '#doctor_name', function(e) {
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
                    //console.log(ui.item.value);
                    return false;
                }
            });
        });


    });

    $(document).ready(function(){
        $(document).on('click', '#patient_name', function(e) {
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
                    //console.log(ui.item.value);
                    return false;
                }
            });
        });


    });


</script>
@endsection
