<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $table = 'papers';
    protected $primaryKey = 'ID';

    protected $fillable = ['Paper_type', 'Title', 'Abstract', 'User_ID'];
    
    public function user() {
        return $this -> belongsTo(User::class, 'User_ID', 'ID');
    }

    public function location() {
        return $this -> belongsTo(Location::class, 'Paper_type', 'Paper_type');
    }

    public function review() {
        return $this -> belongsTo(Review::class, 'ID', 'Paper_ID');
    }

    public function showPaper($ID)
    {
        // Fetch the $papers data based on the provided $id
        $papers = Paper::find($ID);

        // Pass the $papers data to the view
        return view('papers.show', ['papers' => $papers]);
    }

}
