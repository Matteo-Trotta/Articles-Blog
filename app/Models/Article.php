<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title', 'subtitle', 'body', 'image', 'user_id', 'category_id','is_accepted','slug'];


//     public function getRouteKeyName()
// {
//     return 'slug';
// }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

// INDICA I CAMPI DA INDICIZZARE PER LA RICERCA FULL-TEXT

public function toSearchableArray()
{
    return [
        'id' => $this->id,
        'title' => $this->title,
        'subtitle' => $this->subtitle,
        'body' => $this->body,
        'category' => $this->category,
    ];
}

public function readDuration(){
    
    $totalWords = Str::wordCount($this->body);
    $minutesToRead = round($totalWords / 200);
    return intval($minutesToRead);
}

// con Str::wordCount() contiamo il numero delle parole presenti all’interno del corpo del nostro articolo;
// con round()andiamo adarrotondare per eccessoi minuti che ci vogliono per leggere il testo(la media di una persona scolarizzata èdi 200 parole al minuto) lo convertiamo con intval()  float in un intero

}
