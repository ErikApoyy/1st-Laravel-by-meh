<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;


class SubmissionController extends Controller
{
    // Middleware (To make sure people don't directly type the link to get to submission page)
    public function __construct() {
        $this->middleware('authstaff') -> except ('index', 'show');
    }

    // This one working
    public function index() { 
        $submission = submission:: with ('user', 'location', 'review') 
        -> get();
        return view ('submission.index', [
            'submissions' => $submission
        ]);
    }


    // This one working
    public function create() {
        return view ('submission.create');
    }

    // Let's make this one working
    // Still not working lol
    // public function store(Request $request) {
    //     $submission = new submission;
    //     $submission->author = $request->input('Name');
    //     $submission->type = $request->input('Paper_type');
    //     $submission->title = $request->input('Title');
    //     $submission->abstract = $request->input('Abstract');
    //     $submission->location = $request->input('Location');
    //     $submission -> save();
        
    //     return redirect ('/submission');
    // }

    // This one working
    public function edit($Paper_ID) {
        $submission = submission::find($Paper_ID);
        return view ('submission.edit') -> with ('submissions', $submission);
    }

    // This one working
    public function update(Request $request, $ID) {
        $submission = submission::where('ID', $ID) -> with ('User') -> first();
            
        if ($submission) {
            $submission -> update ([
                'Paper_type' => $request -> input ('Paper_type'),
                'Title' => $request -> input ('Title'),
                'Abstract' => $request -> input ('Abstract'),
            ]);
        }
        
        return redirect ('/submission'); 
    }

    // This one working
    public function destroy($ID){
        $submission = submission::find($ID);

        if ($submission) {
            $submission = submission::where('ID', $ID) -> delete();
        }
        return redirect ('/submission');
    }
}
