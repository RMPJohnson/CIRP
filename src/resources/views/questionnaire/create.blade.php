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
                        <option>Company</option>
                        <option>Business</option>
                        <option>Business ISR</option>
                        <option>Aircraft</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Assigns Risk Tags *</label>
                    <select class="form-control" name="category" multiple>
                        <option>Designate a Risk Manager</option>
                        <option>Identify Reasonably Foreseeable Internal and External Threats</option>
                        <option>Assess the Likelihood and Estimate Damage</option>
                        <option>Review Current Policies, Procedures, Systems, and Safeguards</option>
                    </select>

                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Type *</label>
                    <select class="form-control type" name="type">
                        <option selected value="1">Checkbox</option>
                        <option value="2">MCQs</option>
                        <option value="3">Text</option>
                    </select>
                </div>
                <div class="ibox-content mcqs" id="addmcqs">
                    <h2>MCQs</h2>
                    <a href="#addmcqs" class="btn btn-primary btn-sm float-right addmcqs" >
                        <i class="fa fa-plus"></i> Add MCQs
                    </a>
                    <small>These are the questions for each specific categories.</small>
                    <div role="form" class="addmcqsform">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Add Answer for MCQs"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-sm btn-primary m-t-n-xs addmcqsave"><strong>Save</strong></button>
                        </div>
                    </div>

                    <ul class="todo-list m-t ">
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">HAS ANY PERSON WHO WILL WHO WILL DRIVE YOUR VEHICLE(S)</span>

                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Had any convictions for driving under the influence of alcohol or drugs? </span>

                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Had a licence cancelled/suspended in the last 5 years?</span>

                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Ever had a claim declined by an insurer?</span>

                        </li>
                    </ul>


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
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.mcqs').hide();
            $('.addmcqsform').hide();

            $('.type').change(function () {
                if($(this).val()==2){
                    $('.mcqs').show();
                    $('.addmcqsform').hide();

                } else{
                    $('.mcqs').hide();
                    $('.addmcqsform').hide();
                }
            });
            $('.addmcqs').click(function () {
                $('.addmcqsform').show();
            });
            $('.addmcqsave').click(function () {
                $('.addmcqsform').hide();
            });
        });
    </script>
@endsection
