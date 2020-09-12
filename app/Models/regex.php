<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        return DB::select('SELECT * FROM regexes WHERE ? RLIKE regex', [$target]);
    }

    /**
     * Make a raw SQL query evaluating the regex on DB side and limiting the results to 1
     */
    public function selectAllWithWhereAndLimit1(string $target = null)
    {
        return DB::select('SELECT * FROM regexes WHERE ? RLIKE regex LIMIT 1', [$target]);
    }

    /**
     * Retrieve all records from db and evaluate using PHP resources
     */
    public function selectAllAndProcessLocally(string $target = null)
    {
        $result = "";
        $records = $this->get();

        foreach($records as $record){
            $result = preg_match($record->regex, $target) ? $record->regex : $result;
        }

        return $result;
    }

    /**
     * Retrieve all records from db, evaluating using PHP resources and stopping after finding the first match
     */
    public function selectAllAndProcessLocallyAndStopAfterFinding(string $target = null)
    {
        $records = $this->get();

        foreach($records as $record){
           if(preg_match($record->regex, $target))
            return $record->regex;
        }

        return "";
    }
}
