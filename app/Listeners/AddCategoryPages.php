<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use App\PseudoCollectionGenerator;
use Illuminate\Support\Collection;

class AddCategoryPages extends PseudoCollectionGenerator
{
    protected static function helpers()
    {
        return [
            'getPostsByCategory' => function ($page, $posts) {
                return $posts->filter(function ($post) use ($page) {
                    return $post->category === $page->category;
                });
            },
        ];
    }

    protected function getCollectionsConfigurations()
    {
        return collect([
            'posts_by_category' => [
                'extends' => '_layouts.blog',
                'path' => 'blog/posts/{category}',
                'items' => $this->getCategoryItems(),
            ],
        ]);
    }

    protected function getCategoryItems()
    {
        return $this->getCategory()->map(function ($category) {
            return [
                'title' => "Blog - " . ucfirst($category),
                'category' => $category,
            ];
        });
    }

    protected function getCategory()
    {
        return $this->jigsaw->getCollection('posts')
            ->flatMap->category
            ->filter()
            ->unique()
            ->values()
            ->toBase();
    }
}
