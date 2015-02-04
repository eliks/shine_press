@extends('emails.template')

@section('messagecontent')

	<h4>QUOTE REQUEST ACKNOWLEDGEMENT</h4>
	<p>Hi,</p>
	<p><a href="{{URL::to('/')}}" style="text-decoration: none;font-weight: 700;"><em>Shine Prints</em></a> has recieved your request for quote.</p>
	<p>The details of your request are as follows:</p>
	<table style="color: #22658f;">
		<tr>
			<td style="text-align: right;font-weight: bold;padding-right: 15px;">Phone:</td>
			<td>{{$phone}}</td>
		</tr>
		<tr>
			<td style="text-align: right;font-weight: bold;padding-right: 15px;">Email:</td>
			<td>{{$email}}</td>
		</tr>
		<tr>
			<td style="text-align: right;font-weight: bold;padding-right: 15px;">Comments:</td>
			<td>{{$comment}}</td>
		</tr>
	</table>
	<p>We will reach out to you soon for further details to prepare your quote.</p>
	<p>We are always glad to do business with you.</p>

@stop