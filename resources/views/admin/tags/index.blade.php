@extends('admin.master')

@section('title', '分类管理')


@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>@lang('blog.tag.title') <small> @lang('blog.tag.subtitle') </small></h2>
                        <a class="btn btn-primary pull-right" href="{{ route('admin.tags.create') }}">@lang('blog.tag.New Tag')</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            @forelse($tags as $tag)
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{ $tag->thumbnail }}" alt="image">
                                            <div class="mask">
                                                <p>{{ str_limit($tag->description, 25) }}</p>
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p>{{ $tag->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>@lang('blog.tag.empty')</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection