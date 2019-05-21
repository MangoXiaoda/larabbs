@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 offset-md-1">
        <div class="card ">
            <div class="card-body">
                <h2 class="">
                    <i class="far fa-edit">
                    </i>
                    @if($topic->id)
            编辑话题
            @else
            新建话题
            @endif
                </h2>
                <hr>
                    @if($topic->id)
                    <form accept-charset="UTF-8" action="{{ route('topics.update', $topic->id) }}" method="POST">
                        <input name="_method" type="hidden" value="PUT">
                            @else
                            <form accept-charset="UTF-8" action="{{ route('topics.store') }}" method="POST">
                                @endif
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    @include('shared._error')
                                    <div class="form-group">
                                        <input class="form-control" name="title" placeholder="请填写标题" required="" type="text" value="{{ old('title', $topic->title ) }}"/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="category_id" required="">
                                            <option disabled="" hidden="" selected="" value="">
                                                请选择分类
                                            </option>
                                            @foreach ($categories as $value)
                                            <option value="{{ $value->id }}">
                                                {{ $value->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="editor" name="body" placeholder="请填入至少三个字符的内容。" required="" rows="6">
                                            {{ old('body', $topic->body ) }}
                                        </textarea>
                                    </div>
                                    <div class="well well-sm">
                                        <button class="btn btn-primary" type="submit">
                                            <i aria-hidden="true" class="far fa-save mr-2">
                                            </i>
                                            保存
                                        </button>
                                    </div>
                                </input>
                            </form>
                        </input>
                    </form>
                </hr>
            </div>
        </div>
    </div>
</div>
@endsection
