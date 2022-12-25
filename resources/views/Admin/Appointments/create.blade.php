@extends('Layout.navbar')


@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-1">Add Appointment</h3>
</div>
<button class="btn btn-primary" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('doctors.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Doctor list</span></span></a></button>
    <div class="card">
        <form style="padding-left: 56px;margin-right: 68px;" method="post" >
            {{csrf_field()}}
               <div class="row">
                   <div class="col"><label class="col-form-label text-dark mb-1">Patient ID</label></div>
                   <div class="col"><input class="form-control text-dark mb-1" type="text" name="patient_id" required></div>
                   @error('patient_id')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
               </div>

               <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Doctor</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="f_name" required></div>
                @error('f_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Date</label></div>
                <div class="col"><input class="form-control " type="datetime-local" name="app_date" required></div>
                @error('app_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Time</label></div>
                <div class="col">
                <select id="blood_group" name="time">
                    <option value="from 8.00 AM to 10.00 AM ">from 8.00 AM to 10.00 AM </option>
                    <option value="from 10.00 AM to 12.00 PM">from 10.00 AM to 12.00 PM</option>
                    <option value="from 12.00 PM to 2.00 PM">from 12.00 PM to 2.00 PM</option>
                    <option value="from 2.00 PM to 4.00 PM">from 2.00 PM to 4.00 PM</option>
                    <option value="from 4.00 PM to 6.00 PM">from 4.00 PM to 6.00 PM</option>
                    <option value="from 6.00 PM to 8.00 PM">from 6.00 PM to 8.00 PM</option>
                    <option value="from 8.00 PM to 10.00 PM">from 8.00 PM to 10.00 PM</option>
                </select>
                </div>
                @error('app_time')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Special Note</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="special_note" required></div>
            </div>
            <button class="btn btn-primary" id="btn_save" type="submit">Done</button>
        </form>
    </div>
@endsection
