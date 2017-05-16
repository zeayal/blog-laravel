<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $slug
 * @property string $description
 * @property string $content_raw
 * @property string $content_html
 * @property bool $is_draft
 * @property string $published_at
 * @property int $user_id
 * @property string $author
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereContentHtml($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereContentRaw($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereIsDraft($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereSubtitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post whereUserId($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    //
}
