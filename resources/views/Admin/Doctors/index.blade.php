@extends('Layout.navbar')


@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Doctor List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('doctors.create') }}">Add Doctor</a>

          </div>

    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif


<table class="table table-bordered text-dark mb-1" >

  <tr>

     <th>No</th>

     <th>Name</th>

     <th>Contact No</th>

     <th>Email Address</th>

     <th>Speciality</th>

     <th width="280px">Action</th>

  </tr>

    @foreach ($user_doctors as $key => $doctor)

    <tr>

        <td>{{ ++$i }}</td>

        <td>Dr.{{ $doctor->f_name }} {{ $doctor->l_name }}</td>

        <td>{{ $doctor->telno}}</td>

        <td>{{ $doctor->email}}</td>

        <td>{{ $doctor->speciality }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('doctors.show',$doctor->user_id) }}">Show</a>

            <a class="btn btn-success" href="{{ route('doctors.edit',$doctor->id) }}">Edit</a>

            <button type="button" class="btn btn-danger confirmdelbtn" data-id="{{$doctor->user_id}}">Delete</button>


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
