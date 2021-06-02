<?php

/**
 * One-to-one / Um para um
 */

$this->get('one-to-one', 'OneToOneController@oneToOne');
$this->get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
$this->get('one-to-one-insert', 'OneToOneController@oneToOneInsert');


/**
 * One to many / Um para muitos
 */

$this->get('one-to-many', 'OneToManyController@oneToMany');
$this->get('many-to-one', 'OneToManyController@manyToOne');
$this->get('one-to-many-two', 'OneToManyController@oneToManyTwo');
$this->get('one-to-many-inserir', 'OneToManyController@oneToManyInserir');

/**
 * Has Many Through
 */
$this->get('has-many-through', 'OneToManyController@hasManyThrough');



Route::get('/', function () {
    return view('welcome');
});


