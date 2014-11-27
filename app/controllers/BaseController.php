<?php

class BaseController extends Controller {

    protected $layout = 'layouts.default';

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}

        $this->layout->root_title = Config::get('title');

	}

}