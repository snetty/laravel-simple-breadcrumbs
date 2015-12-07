<?php

namespace Snetty\LaravelSimpleBreadcrumbs;

class Breadcrumbs extends \Illuminate\Support\Collection{

	public static function start($url, $title){
		return new self([(object) compact('url', 'title')]);
	}

	public function add($url, $title){
		$this->push((object) compact('url', 'title'));
		return $this;
	}

	public function render(){
		return view('vendor.snetty.laravel-simple-breadcrumbs.breadcrumbs', ['breadcrumbs' => $this])->render();
	}
}