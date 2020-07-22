@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est itaque, eveniet explicabo odit a quo maiores atque ab et unde, nihil delectus. Eos ex sapiente possimus eaque. Tenetur, dolor eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo harum, nemo voluptates beatae velit architecto ex aliquam! Nostrum harum saepe esse, nobis repudiandae porro ipsa similique impedit totam, nam ex? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, est, qui recusandae beatae hic delectus omnis magni maiores cupiditate officia ducimus architecto eligendi a! Dignissimos suscipit hic id beatae totam.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection