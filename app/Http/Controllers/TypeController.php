<?php

namespace App\Http\Controllers;

use App\item;
use App\tag;

class TypeController extends Controller
{
    public function getNews() {
        $obj = item::where('type_id', 1)->orderBy('id', 'DESC')->paginate(2);
        return view('news', compact('obj'));
    }
    public function getMedia() {
        $obj = item::where('type_id', 2)->orderBy('id', 'DESC')->paginate(2);
        return view('media', compact('obj'));
    }
    public function getNewsDetail($id) {
        $obj = item::find($id);
        return view('newsDetail', compact('obj'));
    }
    public function getMediaDetail($id) {
        $obj = item::find($id);
        return view('mediaDetail', compact('obj'));
    }
    public function getTags() {
        $tags = tag::paginate(15);
        return view('tags', compact('tags'));
    }
    public function getTagsRelative($tag) {
        $obj = item::where('tags', 'LIKE', '%' . $tag . '%')->orderBy('id', 'DESC')->paginate(1);
        return view('tagsRelative', compact('obj', 'tag'));
    }
}
