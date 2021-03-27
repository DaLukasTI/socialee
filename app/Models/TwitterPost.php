<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\TwitterPost
 *
 * @property int $id
 * @property int|null $tweet_id
 * @property string $post_body
 * @property int|null $favourites
 * @property int|null $retweets
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost whereFavourites($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost wherePostBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost whereRetweets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost whereTweetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwitterPost whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TwitterPost extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'tweet_id',
        'retweets',
        'post_body',
        'favourites',
    ];


    public function getMediaFromModel()
    {

        return $this->getFirstMediaUrl('media');

    }

}

