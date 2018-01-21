<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Events;
use Auth;
use Carbon\Carbon;

class EventsController extends Controller
{
   public function __construct(){
		$this->middleware('auth',['only'=>'create']);
   }
   public function index(){

	 /*if( Auth::viaRemember()) {
		\Session::flash('flash_message','You were remembered');
	 }*/
	
	$user = Auth::user();	
	//return $user->userprofile->toArray();	
	$events = Events::latest('published_at')->published()->get();
	
	return view('allevents2',compact('events','user'));
	
	
   }
   public function create(){
		
		//return view('createevent',compact('user'));
   }
   public function edit($id){
		$event = Events::findOrFail($id);
		return view('updateevent',compact('event'));
   }
   public function show($id){
		return Events::findorfail($id);
   }
   public function store(Request $request){
		$this->validate($request,['EventName'=>'required|min:2','published_at'=>'required|date']);
		$event = new Events($request->all());
		/* authenticated UserID atomatically added in request */
		Auth::user()->events()->save($event);
		//Events::create($request->all());
		return redirect('events');
   }
   public function update($id,Request $request){
		
		$this->validate($request,['EventName'=>'required|min:2','published_at'=>'required|date']);
		
		$event = Events::findorfail($id);
		$event->update($request->all());		
		return redirect('events');
   }
   public function showTemplates(){
		$mailchimp = \App::make('Mailchimp');
		/*$templates = $mailchimp->call('/templates/info',array(
                'template_id'  =>1000107
               
            ));
		$templates = $mailchimp->call('/templates/list',array(
         //       'types'             => array('gallery'=>true)
               
       //     ));
		//$templates = $templates["gallery"];
		$templates = $mailchimp->call('/templates/info',array(
                'template_id'  =>1000107
               
            ));
			return $mailchimp->lists
                ->subscribe(
                    "131917", 
                    ['email' => 'asmafarhat006@gmail.com']
                );*/
		$templates = $mailchimp->call('/campaigns/create',['type'=>'regular','options'=>[
				'list_id' =>"d935bd283a",
                'subject' => 'Happy New Year',
                'from_email' => 'asma.farhat@e2esp.com',
                'from_name' => 'Nazia',
                'to_name' => 'Asma Farhat',
				'gallery_template_id'=>1000107
				 
            ],
            'content'=>[
                'html' => 'Hello, This is the first email from GITR',
				'sections'=>["header"=>"header","main"=>"main","footer"=>"footer"],
				'content'=>'First content'
            ]]);
		return $templates;
		//return view('mailchimp',compact('templates'));	
   }
}
