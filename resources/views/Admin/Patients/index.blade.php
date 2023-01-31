@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Patient List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('patients.create') }}">Add Patient</a>

        </div>

    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif


<table class="table table-bordered text-dark mb-1">

  <tr>

     <th>No</th>

     <th>Name</th>

     <th>Contact No</th>

     <th>Email Address</th>

     <th width="280px">Action</th>

  </tr>

    @foreach ($user_patients as $key => $patient)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $patient->f_name }} {{ $patient->l_name }}</td>

        <td>{{ $patient->telno }}</td>

        <td>{{ $patient->email }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('patients.show',$patient->user_id )}}">Show</a>

            <a class="btn btn-success" href="{{ route('patients.edit',$patient->id) }}">Edit</a>

            <button type="button" class="btn btn-danger confirmdelbtn" data-id="{{$patient->user_id}}">Delete</button>

        </td>

    </tr>

    @endforeach

</table>


{!! $user_patients->render() !!}


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
                        url: '/patients/' + id ,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",

                        });
                        window.location.href = '/patients';
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

