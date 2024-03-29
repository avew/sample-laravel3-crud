<?php

class Authors_Controller extends Base_Controller {

    public $restful = true;

    public function get_index() {
        return View::make('authors.index') -> with('title', 'Authors and Books') -> with('authors', Author::order_by('name') -> get());
    }

    public function get_view($id) {
        return View::make('authors.view') -> with('title', 'Author View Page') -> with('author', Author::find($id));
    }

    public function get_new() {
        return View::make('authors.new') -> with('title', 'Add new author');
    }

    public function post_create() {
        $validation = Author::validate(Input::all());

        if ($validation -> fails()) {
            return Redirect::to_route('new_author') -> with_errors($validation) -> with_input();
        } else {
            Author::create(array('name' => Input::get('name'), 'bio' => Input::get('bio')));
            return Redirect::to_route('authors') -> with('message', 'The author created succesfully');
        }
    }

    public function get_edit($id) {
        return View::make('authors.edit') -> with('title', 'Edit Author') -> with('author', Author::find($id));
    }

    public function put_update() {
        $id = Input::get('id');
        $validation = Author::validate(Input::all());

        if ($validation -> fails()) {
            return Redirect::to_route('edit_author', $id) -> with_errors($validation);
        } else {
            Author::update($id, array('name' => Input::get('name'), 'bio' => Input::get('bio')));
            return Redirect::to_route('author', $id) -> with('message', 'Author updated succesfully');
        }
    }

    public function delete_destroy() {
        Author::find(Input::get('id')) -> delete();
        return Redirect::to_route('authors') -> with('message', 'The authors delete succesfully');
    }

}
