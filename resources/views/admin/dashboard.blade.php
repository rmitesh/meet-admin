@extends('layouts.admin.app')

@section('title')
	{{ $title }}
@endsection

@section('content')
	<x-admin.breadcrumb :breadcrumbs="$breadcrumbs" />
@endsection