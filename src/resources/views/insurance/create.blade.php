@extends('layouts.app')
@section('title', 'Insurance Products | Create')
@section('content')

    <div class="col-lg-12 col-md-12">
    <form method="post" action="{{ route('insurance.store') }}">
        @csrf
        <div class="ibox">
            <div class="ibox-title">
                Add Insurance Product.
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Title *</label>
                            <input placeholder="Name" id="name" class="form-control" name="name" type="text">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Slug *</label>
                            <input placeholder="Slug" id="slug" class="form-control" name="slug" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Category *</label>
                            <select  class="form-control category" name="category">
                                <option value="1">Company</option>
                                <option value="2">Address Business</option>
                                <option value="3">Address Business (ISR)</option>
                                <option value="5">Mobile Property/Stock</option>
                                <option value="6">Transit Carriers</option>
                                <option value="7">Transit (Owner)</option>
                                <option value="8">House Holders</option>
                                <option value="9">Hull Commercial</option>
                                <option value="10">Farm</option>
                                <option value="11">Motor Private/Trade</option>
                                <option value="12">Motor Commercial</option>
                                <option value="13">Landlord</option>
                                <option value="14">Travel</option>
                                <option value="15">Aircraft</option>
                                <option value="16">Pleasure craft</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Description *</label>
                            <textarea cols="" class="form-control">

                    </textarea>

                        </div>
                    </div>
                </div>
                <fieldset class="company" >
                    <legend>Company Details</legend>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Date Established *</label>
                                <input class="form-control" name="slug" type="date">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Director *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Business Activities</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Sold *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Import & Export Products</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Turnover Next Year</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Turnover Last Year *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Wages *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Number of Employees</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Hire Assets (in/out) *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Non-Owned Trailers *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Operate unregistered plants</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Customer Goods*</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Risk Management Procedures *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Engage sub contractors</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Labour Hire Employees (in/out) *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Geographical Operations *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Comply with safety legislation</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="business">
                    <legend>Address Business</legend>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Owner *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Building Age</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Construction Wall</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Construction Floor *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Construction Roof</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">% of EPS or Cladding</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Thermo Scans *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Documented Risk Management *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Fire Protection/Program</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Security Details *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Interested Party</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Operate unregistered plants</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Building /Fitout Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Risk Management Procedures *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Building Interruption</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Glass Internal *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Glass External *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Contents Values</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Stock Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Money Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Electrical Equipment Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Mechanical Equipment Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">DOS</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Air Conditioning Size/Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="businessisr">
                    <legend>Address Business ISR</legend>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Owner *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Building Age</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Construction Wall</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Construction Floor *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Construction Roof</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">% of EPS or Cladding</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Thermo Scans *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Documented Risk Management *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Fire Protection/Program</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Security Details *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Interested Party</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Operate unregistered plants</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Building /Fitout Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Risk Management Procedures *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Building Interruption</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Glass Internal *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Glass External *</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Contents Values</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Stock Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Money Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Electrical Equipment Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Mechanical Equipment Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">DOS</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Air Conditioning Size/Value</label>
                                <input class="form-control" name="slug" type="text">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="ibox-content">
                    <h2>Questions</h2>
                    <small>These are the questions for each specific categories.</small>
                    <ul class="todo-list m-t company">
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
                    <ul class="todo-list m-t business">
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">HAS ANY PERSON OR ENTITY, WHO WILL BE COVERED BY THIS POLICY:</span>

                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Ever been liable for any civil offence or pecuniary penalty?   </span>

                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Ever been charged or convicted of a criminal offence?       </span>

                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Ever Been liable for any criminal offence    </span>

                        </li>
                    </ul>
                    <ul class="todo-list m-t businessisr">
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Made any insurance claims in the last 5 years (relevant to this application)?</span>

                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Had any convictions for driving under the influence of alcohol or drugs? </span>

                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Ever had an insurance policy cancelled, declined or terms imposed?</span>

                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" >
                            <span class="m-l-xs">Have anything else to declare under your duty of disclosure?</span>

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
            $('.business').hide();
            $('.businessisr').hide();
            $('.category').change(function () {
               if($(this).val()==1){
                   $('.company').show();
                   $('.business').hide();
                   $('.businessisr').hide();
               }
                if($(this).val()==2){
                    $('.company').hide();
                    $('.business').show();
                    $('.businessisr').hide();
                }
                if($(this).val()==3){
                    $('.company').hide();
                    $('.business').hide();
                    $('.businessisr').show();
                }
            });
        });
    </script>
@endsection
