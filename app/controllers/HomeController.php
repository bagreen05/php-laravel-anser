<?php

class HomeController extends BaseController {

    protected $layout = 'layouts.default';

    public function changeLanguage($language) {

        if($language == 'ru' or $language == 'ro')
            Session::put('language', $language);

        return Redirect::back();
    }

	public function indexPage()
	{
        $banners = Banner::active()->with(array(
            'gallery.images' => function($query) {
                    $query->
                        orderByroot();
                }
        ))->
            orderBy('created_at', 'DESC')->
            get();

        $partners = Partner::active()->with(array(
            'gallery.images' => function($query) {
                    $query->orderByroot();
                }
        ))->get();

        $this->layout->title = trans('messages.pagetitle-home');

		$this->layout->content = View::make('home.index', array(
            'banners' => $banners,
            'partners' => $partners,
        ));
	}

    public function occupationPage() {

        $this->layout->title = trans('messages.pagetitle-occupations');

        $occupations = Occupation::with(array(
            'gallery.images' => function($query) {
                    $query->orderByRoot();
                }
        ))->
            onlyParent()->
            active()->
            orderBy('occupations.parent')->
            orderBy('occupations.position')->
            get();

        $this->layout->content = View::make('home.occupation.all', array(
            'occupations' => $occupations,
        ));
    }

    public function occupationView($occupationId) {

        $this->layout->title = trans('messages.pagetitle-occupations');

        $occupation = Occupation::whereId($occupationId)->
            with(array(
            'gallery.images' => function($query) {
                    $query->orderByRoot();
                }
        ))->first();

        $occupation_childs = Occupation::with(array(
            'gallery.images' => function($query) {
                    $query->root();
                }
        ))->
            where('parent', '=', $occupationId)->
            get();

        $this->layout->content = View::make('home.occupation.view', array(
            'occupation' => $occupation,
            'occupation_childs' => $occupation_childs,
        ));

    }

    public function worksPage() {

        $this->layout = View::make('home.works.layouts.default');

        $this->layout->root_title = Config::get('title');
        $this->layout->title = trans('messages.pagetitle-works');

        $works = Work::with(array(
            'gallery.images' => function($query) {
                    $query->orderByRoot();
                }
        ))->get();

        $this->layout->map = View::make('home.works.layouts.map', array(
            'works' => $works,
        ));
        $this->layout->content = View::make('home.works.index', array(
            'works' => $works,
        ));


    }

    public function workShowPage($workId) {

        $this->layout = View::make('home.works.layouts.default');

        $this->layout->root_title = Config::get('title');
        $this->layout->title = trans('messages.pagetitle-works');

        $works = Work::with(array(
            'gallery.images' => function($query) {
                    $query->orderByRoot();
                }
        ))->get();


        $work = Work::whereId($workId)->with(array(
            'gallery.images' => function($query) {
                    $query->orderByRoot();
                }
        ))->first();

        $this->layout->map = View::make('home.works.layouts.map', array(
            'works' => $works,
            'work' => $work,
        ));

        $this->layout->content = View::make('home.works.show', array(
            'work' => $work,
        ));


    }

    public function contactsPage() {

        $this->layout = View::make('layouts.contacts');

        $this->layout->root_title = Config::get('title');
        $this->layout->title = trans('messages.pagetitle-contacts');

        $this->layout->content = View::make('home.contacts');

    }

}