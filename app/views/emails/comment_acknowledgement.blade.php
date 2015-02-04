@extends('emails.template')

@section('messagecontent')

	<h4>COMMENTS ACKNOWLEDGEMENT</h4>
	<p>Hi,</p>
	<p><a href="{{URL::to('/')}}">Thennek West Africa</a> has recieved your comments and wish to show appreciation for the time and effort you spent to send it.</p>
	<p>We value your comments and will reach out to you if necessary.</p>
	<p>The details of your comments are as follows:</p>
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
	<p>We are always glad to hear from you. Never hesitate to share your thoughts or opinions with us.</p>

@stop