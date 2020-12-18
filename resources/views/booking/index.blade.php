@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-5 mt-3">Bookings List</h1>
    <div class="row text-justify">
        @foreach($bookings as $booking)
            <ul class="booking list-group mb-5 mx-2">
                <li class="list-group-item bg-dark text-center"><a href="{{ route('booking.show', $booking->id) }}" class="text-light">{{$booking->id}}</a></li>
                <li class="list-group-item"><span class="text-info"><u>booking_date</u></span> | {{$booking->booking_date}}</li>
                <li class="list-group-item"><span class="text-info"><u>booking_time</u></span> | {{$booking->booking_time}}</li>
                <li class="list-group-item"><span class="text-info"><u>number_of_seats</u></span> | {{$booking->number_of_seats}}</li>
                <li class="list-group-item"><span class="text-info"><u>user_id</u></span> | {{$booking->user_id}}</li>
                <li class="list-group-item"><span class="text-info"><u>created_at</u></span> | {{$booking->created_at}}</li>
            </ul>
        @endforeach
    </div>
@endsection