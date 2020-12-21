@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-5 mt-3">Bookings List</h1>
    
        @foreach($bookings as $booking)
        <ul class="booking list-group mb-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{route('booking.show', $booking->id)}}" class="text-dark">This booking is for the <strong>{{$booking->booking_date}}</strong> at <strong>{{$booking->booking_time}}</strong></a>
                <span class="badge badge-primary badge-pill">{{$booking->number_of_seats}} persons</span>
            </li>
        </ul>
        @endforeach
    
@endsection