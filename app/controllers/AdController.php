<?php

class AdController extends \BaseController {
	public function index(){
		return View::make('ad_index')->with('messages', Message::all());
														// ->where('type',1)
														// ->orderBy('created_at'));
	}
	
	public function logout(){
		Auth::logout();
		Session::flash('message', 'Successfully Signed out!');
		return Redirect::to('/');
	}
	
	public function submit_message_c(){
		// return Input::all();
		// return $type = Input::get('type');
		
		$MS = new Message;
			
		$nm = Input::get('name');
		$ph = Input::get('phone_number');
		$em = Input::get('email');
		$ms = Input::get('message');
		
		
		if($nm =='' && $ph =='' && $em == '' && $ms == ''){
			Session::flash('info', 'You submitted an empty form. Please fill the form out and try again.');
			return Redirect::back()->withInput();
		} elseif($ph =='' && $em == '') {
			Session::flash('info', 'Please provide at least one contact information to help us get back to you.');
			return Redirect::back()->withInput();
		} else {
			$validator = Validator::make($data = Input::all(), Message::$rules);
// 			
			if($validator->fails()){
				Session::flash('info', $validator->errors()->first().' Please check and try again.');
				return Redirect::back()->withInput();
			}
			
			$MS->name = $nm;
			$MS->telephone = $ph;
			$MS->email = $em;
			$MS->content = $ms;
			
			$MS->save();
			
			if($MS->email != ''){
				//send message via email
				$from = 'Shine Prints. <info@shineprintsgh.com>'; // sender
			    $subject = 'Thank you for your comment';
				$message = View::make('emails.comment_acknowledgement')
								->with('name',$nm)
								->with('phone',$ph)
								->with('email',$em)
								->with('comment',$ms);
				 
				$headers = "From: " . $from . "\r\n";
				$headers .= "Reply-To: Thennek West Africa. <info@thennekwestafrica.com>\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				// $headers .= "Bcc: Shine Prints. <info@shineprints.com>\r\n";
			    // message lines should not exceed 70 characters (PHP rule), so it is wrapped
			    // $message = wordwrap($message, 70);
			    // send mail
			    mail($em,$subject,$message,$headers);
			}
			
			Session::flash('congrat', 'Thanks for your interest. We will reach out to you if necessary.');
			return Redirect::back();
		}
	}

public function submit_message_r(){
		// return Input::all();
		// return $type = Input::get('type');
		
		$MS = new Message;
			
		$nm = Input::get('name');
		$ph = Input::get('phone_number');
		$em = Input::get('email');
		$ms = Input::get('message');
		
		
		if($nm =='' && $ph =='' && $em == '' && $ms == ''){
			Session::flash('info', 'You submitted an empty form. Please fill the form out and try again.');
			return Redirect::back()->withInput();
		} elseif($ph =='' && $em == '') {
			Session::flash('info', 'Please provide at least one contact information to help us get back to you.');
			return Redirect::back()->withInput();
		} else {
			$validator = Validator::make($data = Input::all(), Message::$rules);
// 			
			if($validator->fails()){
				Session::flash('info', $validator->errors()->first().' Please check and try again.');
				return Redirect::back()->withInput();
			}
			
			$MS->name = $nm;
			$MS->telephone = $ph;
			$MS->email = $em;
			$MS->content = $ms;
			
			$MS->save();
			
			if($MS->email != ''){
				//send message via email
				$from = 'Shine Prints. <info@shineprintsgh.com>'; // sender
			    $subject = 'Thank you for your request';
				$message = View::make('emails.comment_acknowledgement')
								->with('name',$nm)
								->with('phone',$ph)
								->with('email',$em)
								->with('comment',$ms);
				 
				$headers = "From: " . $from . "\r\n";
				$headers .= "Reply-To: Thennek West Africa. <info@thennekwestafrica.com>\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				// $headers .= "Bcc: Shine Prints. <info@shineprints.com>\r\n";
			    // message lines should not exceed 70 characters (PHP rule), so it is wrapped
			    // $message = wordwrap($message, 70);
			    // send mail
			    mail($em,$subject,$message,$headers);
			}
			
			Session::flash('congrat', 'Thanks for your interest. We will reach out to you soon.');
			return Redirect::back();
		}
	}
}