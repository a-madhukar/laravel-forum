@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                    @forelse($threads as $thread)
                        <article>
                            <h4>
                                <a href="{{ $thread->path() }}">
                                    {{ $thread->title }}
                                </a>
                            </h4>
                            <div class="body">
                                {{ $thread->body }}
                            </div>
                        </article>
                        <hr>
                    @empty
                        <article>
                            <h6>No threads have been created</h6>
                        </article>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
