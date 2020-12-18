@extends('layouts.app')

@section('content')
    <h1 class="text-center">Booking Detail</h1>
    <div class="row text-justify">
        <ul class="list-group">
            <li class="list-group-item bg-dark text-center text-light">{{$booking->id}}</li>
            <li class="list-group-item"><span class="text-info"><u>booking_date</u></span> | {{$booking->booking_date}}</li>
            <li class="list-group-item"><span class="text-info"><u>booking_time</u></span> | {{$booking->booking_time}}</li>
            <li class="list-group-item"><span class="text-info"><u>number_of_seats</u></span> | {{$booking->number_of_seats}}</li>
            <li class="list-group-item"><span class="text-info"><u>user_id</u></span> | {{$booking->user_id}}</li>
            <li class="list-group-item"><span class="text-info"><u>created_at</u></span> | {{$booking->created_at}}</li>
            <li class="list-group-item d-flex text-center"><button type="button" class="btn btn-sm btn-outline-success w-50 mr-3">Edit</button> <button type="button" class="btn btn-sm btn-outline-danger w-50">Remove</button></li>
        </ul>
    </div>
@endsection