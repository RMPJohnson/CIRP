@extends('layouts.app')
@section('title', 'Customer | Create')
@section('content')

    <div class="col-lg-12 col-md-12">
    <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="ibox">
            <div class="ibox-title">
                 Customer Personal Information
            </div>
            <div class="ibox-content">
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                <label for="name" class="form-label">First Name *</label>
                                {!! Form::text('first_name', old('first_name'), array('placeholder' => '','class' => 'form-control')) !!}
                                @if ($errors->has('first_name'))
                                    <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
                                @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Last Name *</label>
                                    {!! Form::text('name', old('name'), array('placeholder' => '','class' => 'form-control')) !!}
                                    @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Father Name *</label>
                                    {!! Form::text('first_name', old('first_name'), array('placeholder' => '','class' => 'form-control')) !!}
                                    @if ($errors->has('first_name'))
                                        <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Mother Name *</label>
                                    {!! Form::text('name', old('name'), array('placeholder' => '','class' => 'form-control')) !!}
                                    @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Date of Birth *</label>
                                    {!! Form::text('first_name', old('first_name'), array('placeholder' => 'Day','class' => 'form-control')) !!}
                                    @if ($errors->has('first_name'))
                                        <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">-</label>
                                    {!! Form::text('name', old('name'), array('placeholder' => 'Month','class' => 'form-control')) !!}
                                    @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">-</label>
                                    {!! Form::text('name', old('name'), array('placeholder' => 'Year','class' => 'form-control')) !!}
                                    @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">House Phone No *</label>
                                    {!! Form::text('phone_no', old('phone_no'), array('placeholder' => '','class' => 'form-control')) !!}
                                    @if ($errors->has('phone_no'))
                                        <span class="text-danger text-left">{{ $errors->first('phone_no') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Mobile No *</label>
                                    {!! Form::text('phone_no', old('phone_no'), array('placeholder' => '','class' => 'form-control')) !!}
                                    @if ($errors->has('phone_no'))
                                        <span class="text-danger text-left">{{ $errors->first('phone_no') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Office Phone No </label>
                                    {!! Form::text('phone_no', old('phone_no'), array('placeholder' => '','class' => 'form-control')) !!}
                                    @if ($errors->has('phone_no'))
                                        <span class="text-danger text-left">{{ $errors->first('phone_no') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Address *</label>
                            {!! Form::text('address', old('address'), array('placeholder' => '','class' => 'form-control')) !!}
                            @if ($errors->has('address'))
                                <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-lg-4"><div class="mb-3">
                                    <label for="name" class="form-label">City *</label>
                                    {!! Form::text('city', old('city'), array('placeholder' => '','class' => 'form-control')) !!}
                                    @if ($errors->has('city'))
                                        <span class="text-danger text-left">{{ $errors->first('city') }}</span>
                                    @endif
                                </div></div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">State *</label>
                                    {!! Form::text('state', old('state'), array('placeholder' => '','class' => 'form-control')) !!}
                                    @if ($errors->has('state'))
                                        <span class="text-danger text-left">{{ $errors->first('state') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4"><div class="mb-3">
                                    <label for="name" class="form-label">ZipCode *</label>
                                    {!! Form::text('city', old('city'), array('placeholder' => '','class' => 'form-control')) !!}
                                    @if ($errors->has('city'))
                                        <span class="text-danger text-left">{{ $errors->first('city') }}</span>
                                    @endif
                                </div></div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <label for="name" class="form-label">Upload Picture *</label>
                                {!! Form::file('picture' , array('placeholder' => 'Upload Picture','class' => 'form-control')) !!}
                                <div class="text-warning">Image size should 100X200 px, .jpg,.png,.gif,.svg are allowed and size must be less then 2 MB</div>
                                @if ($errors->has('picture'))
                                    <span class="text-danger text-left">{{ $errors->first('picture') }}</span>
                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <div class="ibox">
            <div class="ibox-title">
                System  Information
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address *</label>
                            {!! Form::text('email', old('email'), array('placeholder' => '','class' => 'form-control')) !!}
                            @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">User Name *</label>
                            {!! Form::text('last_name', old('last_name'), array('placeholder' => '','class' => 'form-control')) !!}
                            @if ($errors->has('last_name'))
                                <span class="text-danger text-left">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Password *</label>
                            {!! Form::password('password', array('placeholder' => '','class' => 'form-control')) !!}
                            @if ($errors->has('city'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div></div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Confirm Password *</label>
                            {!! Form::password('confirm-password', array('placeholder' => '','class' => 'form-control')) !!}
                            @if ($errors->has('state'))
                                <span class="text-danger text-left">{{ $errors->first('state') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ibox">
            <div class="ibox-title">
                Product Information
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="email" class="form-label">Insurance Products *</label>
                            <select class="form-control">
                                <option>Company Insurance Policy for 5 Years</option>
                                <option>Company Insurance Policy for 10 Years</option>
                                <option>Company Insurance Policy for 15 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="company" >
                            <h3>Company Details</h3>
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
                        </div>
                        <div class="business">
                            <h3>Address Business</h3>
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
                        </div>
                        <div class="businessisr">
                            <h3>Address Business ISR</h3>
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
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="ibox">
            <div class="ibox-title">
                Questions
            </div>
            <div class="ibox-content">
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
                    <li>

                        <span class="m-l-xs">No of year that you want this policy?</span>
                        <input type="text" class="form-control" value="5">

                    </li>
                    <li>
                        <input type="checkbox" value="" name="" class="i-checks" >
                        <span class="m-l-xs">Do you have any health issue? if Yes please describe.</span>
                        <textarea class="form-control"></textarea>
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

            <div class="ibox-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save Customer</button>
                <a href="{{ route('clients.index') }}" class="btn btn-default"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>


    </form>
        <div class="mt-4">&nbsp;</div>
    </div>

@endsection
@section('scripts')
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
