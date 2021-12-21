<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bihin;

class kurasu extends Model
{

    use HasFactory;
    protected $fillable = [
        "gradeNumber",
        "classNumber",
        "program",
        "name",
        "food_flag",
        "note"
    ];
    protected $table = "classes";

    public function get_bihin() {
        return $this->hasMany(bihin::class, "class_id");
    }
}
