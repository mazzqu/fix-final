<?php

use Carbon\Carbon;

use App\Models\Posts;
use App\Models\Categories;

function formatDate($date)
{
  $carbonDate = Carbon::parse($date);

  // $carbonDate->setLocale('id');
  $carbonDate->setLocale('ja');

  return $carbonDate->isSameDay(Carbon::now()) ?
    $carbonDate->diffForHumans() :
    // $carbonDate->format('d F Y');
    $carbonDate->format('Y年m月d日');
}


function getSidebarData()
{
  $categories = Categories::withCount(['posts' => function ($query) {
    $query->where('active', 1);
  }])->get();

  $tags = Posts::where('active', 1)->pluck('tags')->flatMap(function ($tags) {
    return explode(',', $tags);
  })->unique()->reject(function ($tag) {
    return empty($tag);
  });

  return compact('categories', 'tags');
}
