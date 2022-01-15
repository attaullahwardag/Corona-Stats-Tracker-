@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <section>
                        <form action="home/posts" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="title">Title</label>
                              <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                              <label for="slug">Slug</label>
                              <input name="slug" type="slug" class="form-control" id="slug" placeholder="Enter Slug">
                            </div>
                            <div class="form-group">
                              <label for="keyword">Keyword</label>
                              <input name="keyword" type="keyword" class="form-control" id="keyword" placeholder="Enter Keyword">
                            </div>
                            <div class="form-group">
                              <label for="image">Blog Image</label>
                              <input name="image" type="file" class="form-control" id="image" placeholder="Select Image">
                            </div>
                            <div class="form-group">
                              <label for="content">Content</label>
                              <textarea name="content" class="form-control my-editor"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="country">country</label>
                              <input name="country" type="country" class="form-control" id="country" placeholder="Enter Country">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Blog</button>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
