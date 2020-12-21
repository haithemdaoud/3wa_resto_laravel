@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Booking Detail</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Booking Date</th>
                <th scope="col">Booking Time</th>
                <th scope="col">Number Of Seats</th>
                <th scope="col">Edit/Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$booking->booking_date}}</td>
                <td>{{$booking->booking_time}}</td>
                <td>{{$booking->number_of_seats}}</td>
                <td><button type="button" class="btn btn-sm btn-outline-success mr-2">Edit</button> <button type="button" class="btn btn-sm btn-outline-danger">Remove</button></td>
            </tr>
        </tbody>
    </table>
@endsection