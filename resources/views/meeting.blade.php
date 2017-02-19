@extends('layouts.main')

@section('title', "會議室租借")

@section('content')
	<full-calendar :events="fcEvents" lang="en"></full-calendar>
@stop
