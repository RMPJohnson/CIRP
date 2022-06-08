@extends('layouts.app')
@section('title', 'Questionnaire | Create')
@section('content')

    <div class="col-lg-6 col-md-6">
    <form method="post" action="{{ route('questionnaire.store') }}">
        @csrf
        <div class="ibox">
            <div class="ibox-title">
                Add Question.
            </div>
            <div class="ibox-content">
                <div class="mb-3">
                    <label for="name" class="form-label">Title *</label>
                    <input placeholder="Name" id="name" class="form-control" name="name" type="text">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Category *</label>
                    <select class="form-control" name="category">
                        <option>Category A</option>
                        <option>Category B</option>
                        <option>Category C</option>
                        <option>Category D</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Type *</label>
                    <select class="form-control" name="category">
                        <option selected value="1">Radio</option>
                        <option value="2">CheckBox</option>
                        <option value="3">Text</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Status *</label> <br>
                    Active  <input name="status" type="radio" value="1">
                    Block   <input checked="checked" name="status" type="radio" value="0">
                </div>

            </div>
            <div class="ibox-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save changes</button>
                <a href="{{ route('questionnaire.index') }}" class="btn btn-default"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </form>
    </div>

@endsection
