@extends('layouts.app')
@section('title', 'Risk Tags | Create')
@section('content')

    <div class="col-lg-6 col-md-6">
    <form method="post" action="{{ route('risktags.store') }}">
        @csrf
        <div class="ibox">
            <div class="ibox-title">
                Add Risk Tags.
            </div>
            <div class="ibox-content">
                <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input placeholder="Name" id="name" class="form-control" name="name" type="text">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Slug *</label>
                    <input placeholder="Slug" id="slug" class="form-control" name="slug" type="text">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Status *</label> <br>
                    Active  <input name="status" type="radio" value="1">
                    Block   <input checked="checked" name="status" type="radio" value="0">
                </div>
            </div>
            <div class="ibox-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save changes</button>
                <a href="{{ route('risktags.index') }}" class="btn btn-default"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </form>
    </div>

@endsection
