@extends('Layout.patientNavbar')

@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Doctor Booking</h2>

        </div>

    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif


<table class="table table-bordered text-dark mb-1">


    @foreach ($user_doctors as $key => $doctor)

    <tr data-aos="zoom-in" data-aos-duration="1000">

        <td width="380px"><h4 class="text-primary" font-size="150px"><b>Dr.{{ $doctor->user->f_name }} {{ $doctor->user->l_name }}</b></h4>

        <b data-aos="zoom-in" data-aos-duration="1000">{{ $doctor->speciality }}</b><br>

        {{ $doctor->telno}} <br>

        {{ $doctor->user->email}}</td>



        <td>

            <a class="btn btn-info" href="{{ route('show_doctor-patient',$doctor->user_id) }}">Profile</a>

            <a class="btn btn-outline-danger" href="{{ route('add_appointment-patient',$doctor->id) }}">Book Appointment</a>

        </td>

    </tr>



    @endforeach

</table>

{!! $user_doctors->render() !!}

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('.confirmdelbtn').click(function (e){
            e.preventDefault();
             id = $(this).data('id');
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '/doctors/' + id ,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",

                        });
                        window.location.href = '/doctors';
                        }
                     });

                } else {
                  swal("Your imaginary file is safe!");
                }
              });
        });
    });
</script>
@endsection
