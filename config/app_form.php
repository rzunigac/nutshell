<?php return [
	'error' => '<div class="error-message alert alert-danger">{{content}}</div>',
    'inputContainer' => '<div class="form-group col-md-6 {{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="form-group col-md-6 input {{required}} error">{{content}}{{error}}</div>',
    'input' => '<input class="form-control {{type}}" type="{{type}}" name="{{name}}"{{attrs}}/>',
    'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
];
