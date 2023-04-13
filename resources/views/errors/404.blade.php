@extends('themes.default1.client.layout.client')
@section('breadcrumb')
    {{--<div class="site-hero clearfix">--}}
    <ol class="breadcrumb float-sm-right ">
        <style>
            .words {
                margin-right: 10px; /* Adjust the value to increase or decrease the gap between list items */
            }
        </style>
        <li class="breadcrumb-item"> <i class="fas fa-home"> </i> {!! Lang::get('lang.you_are_here') !!} : &nbsp;</li>
        <li><a  class="words" href="{{url('/')}}">{!! Lang::get('lang.home') !!}</a></li>

@stop
@section('content')
<div id="page" class="hfeed site">
    <article class="hentry error404 text-center">
        <h1 class="error-title mb-0">4<i class="fas fa-frown text-info"></i><span class="visible-print text-danger" style="display: none">0</span>4</h1>
        <h2 class="entry-title text-muted">{!! Lang::get('lang.we_are_sorry_but_the_page_you_are_looking_for_can_not_be_found') !!}</h2>
        <div class="entry-content clearfix">
            <p><a onclick="goBack()" href="#">{!! Lang::get('lang.go_back') !!}</a></p>
        </div><!-- .entry-content -->
    </article><!-- .hentry -->
</div><!-- #page -->

<script>
    function goBack() {
        window.history.back();
    }
</script>
@stop