@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
    </head>
    <body>
        <h1>Contact Us</h1>
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf 
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message: </label>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>
            <button type="submit">Send Message</button>
        </form>
    </body>
</html>
@endsection
