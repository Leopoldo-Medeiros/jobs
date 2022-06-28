<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $formFields)
 */
class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

    // What does it do? It allows us: In the Listing Model declared in Routes (web.php)
    // we'll now be able to filter

    public function scopeFilter($query, array $filters) {
//        dd($filters['tag']);

        // If it's not false, then move on
        // If there's a tag then do it what is in
        // If not, it just does anything

        // If statement for "tags"
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        // If statement for "search"
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
            ;
        }
    }

    // Relationship To User
    /**
     * What it is doing?
     * The listing model belongs to a user, and this is where that id is going to be stored
     *
     * The file name is "Listing". So the relationship to a user is listing belongs to a user.
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
