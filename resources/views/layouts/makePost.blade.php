@extends('layouts.nav')

@section('content')
    <div class="container logincontainer">
    <div class="row loginbox">
        <div class="col-md-offset-2 col-md-8">
            <div class="form-login">
                <form method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id  }}">
                    <div class="form-group">
                        <label for="post-title">Titel</label>
                        <input type="text" id="post-title" class="form-control" name="title"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="post-slug">Gegenereerde slug</label>
                        <input type="text" id="post-slug" class="form-control" name="slug"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-body">Descriptie</label>
                        <textarea id="message-body" class="form-control" name="descriptie"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Plaatsen</button>
                </form>
            </div>

        </div>
    </div>
</div>
    @stop