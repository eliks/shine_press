@extends('emails.admin_template')

@section('messagecontent')

	<h4>COMMENTS NOTIFICATION</h4>
	<p>Hi,</p>
	<p>A visitor has submitted a comment at <a href="{{URL::to('/')}}" style="text-decoration: none;font-weight: 700;"><em>www.thennekwestafrica.com</em></a> with the following details:</p>
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
	<p>Go to <a href="{{URL::to('/ad')}}" style="text-decoration: none;font-weight: 700;"><em>Admin Dashboard</em></a> to manage comments submitted.</p>

@stop