<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Transformers\NewsTransformer;


class NewsController extends Controller
{
    public function index(News $news,Request $request)
    {
        $query = $news->query();

        // return response($query);

        if ($categoryId = $request->category_id) {
            $query->where('category_id', $categoryId);
        }

        $newss = $query->paginate(20);

        return response($newss);
        // return $this->response->paginator($newss, new NewsTransformer());
    }

    public function show(News $news,Request $request)
    {
        // $query = $request->query();
        // $id = $query['id'];
        // $news = News::find($id);

        // return $query;
        // return response($query);
        $news_id = $request->news;
        $news = News::find($news_id);
        if(!$news){
            return response()->json(['status'=>404,'message'=>'不存在新闻！']);
        }
        return response()->json(['status'=>200,'message'=>'success','data'=>$news]);
        // return $news;

        // return $this->response->item($news, new NewsTransformer());
        
    }


}
