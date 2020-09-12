<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regex extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'regex',
    ];

    /**
     * Make a raw SQL query evaluating the regex on DB side
     */
    public function selectAllWithWhere(string $target = null)
    {
        # code...
    }

    /**
     * Make a raw SQL query evaluating the regex on DB side and limiting the results to 1
     */
    public function selectAllWithWhereAndLimit1(string $target = null)
    {
        # code...
    }

    /**
     * Retrieve all records from db and evaluate using PHP resources
     */
    public function selectAllAndProcessLocally(string $target = null)
    {
        # code...
    }

    /**
     * Retrieve all records from db, evaluating using PHP resources and stopping after finding the first match
     */
    public function selectAllAndProcessLocallyAndStopAfterFinding(string $target = null)
    {
        # code...
    }
}
