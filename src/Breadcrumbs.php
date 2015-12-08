<?php

namespace Snetty\LaravelSimpleBreadcrumbs;

use Illuminate\Support\Collection;

class Breadcrumbs extends Collection
{
    /**
     * Initialize the breadcrumbs.
     *
     * @param  string $url
     * @param  string $title
     * @return \Illuminate\Support\Collection
     */
    public static function start($url, $title)
    {
        return new self([(object) compact('url', 'title')]);
    }

    /**
     * Add one or more items to the breadcrumbs.
     *
     * @param string|array $urls
     * @param string|void  $title
     */
    public function add($urls, $title = null)
    {
        if ( ! is_array($urls) && is_null($title) ) {
            // It is not an array, add only one item.
            $this->push((object) ['url' => $urls, 'title' => $title]);
        } else {
            // It is an array, add each of the items in the array.
            foreach ($urls as $item => $title) {
                $this->push((object) ['url' => $item, 'title' => $title]);
            }
        }

        return $this;
    }

    /**
     * Render the breadcrumbs on the page.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return view('vendor.snetty.laravel-simple-breadcrumbs.breadcrumbs', ['breadcrumbs' => $this])->render();
    }
}
