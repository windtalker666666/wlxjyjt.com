<?php

namespace App\Transformers;

use App\Models\News;
use League\Fractal\TransformerAbstract;

class NewsTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['category'];

    public function transform(News $news)
    {
        return [
            'id' => $news->id,
            'title' => $news->title,
            'content' => $news->content,
            'category_id' => $news->category_id,
            'read_count' => $news->read_count,
            'thumbnail' => $news->thumbnail,
            'status' => $news->status,
            'created_at' => $news->created_at->toDateTimeString(),
            'updated_at' => $news->updated_at->toDateTimeString(),
        ];
    }


    public function includeCategory(News $news)
    {
        return $this->item($news->category, new CategoryTransformer());
    }
}