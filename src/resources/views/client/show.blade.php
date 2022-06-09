@extends('layouts.app')
@section('title', 'Customer | Show')
@section('content')

    <div class="col-lg-12 mb-5">
        <div class="ibox">
            <div class="ibox-title">
                Customer Information
            </div>
            <div class="ibox-content">
                <div class="row mt-4">

                    <div class="col-md-6">
                        <div class="profile-image">
                            <img src="http://devcirp.com/images/user/user.jpg" class="img-fluid img-circle">
                        </div>
                        <div class="profile-info">
                            <h4>
                                <div class="row">
                                    <div class="col-lg-4"><dt>User Name:</dt></div>
                                    <div class="col-lg-8">Admin</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>Email Address:</dt></div>
                                    <div class="col-lg-8">admin@gmail.com</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>First Name:</dt></div>
                                    <div class="col-lg-8">Yasir</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>Last Name:</dt></div>
                                    <div class="col-lg-8">Rehman</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>Father Name:</dt></div>
                                    <div class="col-lg-8">Jeo khyei</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>Mother Name:</dt></div>
                                    <div class="col-lg-8">Jasmeen June</div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>Address:</dt></div>
                                    <div class="col-lg-8">St no 4 House no 32 F-10 Islamabad</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>City:</dt></div>
                                    <div class="col-lg-8">Islamabad</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>Zipcode:</dt></div>
                                    <div class="col-lg-8">39092</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>State:</dt></div>
                                    <div class="col-lg-8">Capital</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>Phone no:</dt></div>
                                    <div class="col-lg-8">839-920-2902</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-4"><dt>Mobile no:</dt></div>
                                    <div class="col-lg-8">839-920-2902</div>
                                </div>

                            </h4>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h4>
                        <div class="row">
                            <div class="col-lg-4"><dt>Policy No:</dt></div>
                            <div class="col-lg-8">738202-291-291</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4"><dt>Policy Create On:</dt></div>
                            <div class="col-lg-8">2022-04-02</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4"><dt>Policy Purchased On:</dt></div>
                            <div class="col-lg-8">2022-04-02</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4"><dt>Policy Updated On:</dt></div>
                            <div class="col-lg-8">2022-04-02</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4"><dt>Broker Name:</dt></div>
                            <div class="col-lg-8"><a href="#">Broker Johnson</a> </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4"><dt>Updated By:</dt></div>
                            <div class="col-lg-8"><a href="#">Broker Johnson</a> </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4"><dt>Insurance:</dt></div>
                            <div class="col-lg-8"><a href="#">Company Insurance Policy for 15 Year</a> </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4"><dt>Created At:</dt></div>
                            <div class="col-lg-8">2022-06-03 11:39:52</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4"><dt>Updated At:</dt></div>
                            <div class="col-lg-8">2022-06-03 11:39:52</div>
                        </div>
                        </h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="ibox">
            <div class="ibox-title">
                Company Insurance Policy for 15 Year
            </div>
            <div class="ibox-content">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-4"><dt>Product Created:</dt></div>
                        <div class="col-lg-8"><a href="#">Broker Johnson</a></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-4"><dt>Category:</dt></div>
                        <div class="col-lg-8">Company Insurance</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-4"><dt>Risk Tags:</dt></div>
                        <div class="col-lg-8"><a href="#">Broker Johnson</a> </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-4"><dt>Insurance:</dt></div>
                        <div class="col-lg-8"><a href="#">Company Insurance Policy for 15 Year</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ibox">
            <div class="ibox-title">Additional Product Information</div>
            <div class="ibox-content">
                <div class="company" >
                    <h3>Company Details</h3>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Date Established *</label>
                                <input class="form-control" name="slug" type="text" value="2022-03-05">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Director *</label>
                                <input class="form-control" name="slug" type="text" value="Ray Johnson">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Business Activities</label>
                                <input class="form-control" name="slug" type="text" value="Normal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Sold *</label>
                                <input class="form-control" name="slug" type="text" value="8910">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Import & Export Products</label>
                                <input class="form-control" name="slug" type="text" value="Yes">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Turnover Next Year</label>
                                <input class="form-control" name="slug" type="text" value="$73829">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Turnover Last Year *</label>
                                <input class="form-control" name="slug" type="text" value="$78092">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Wages *</label>
                                <input class="form-control" name="slug" type="text" value="2000">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Number of Employees</label>
                                <input class="form-control" name="slug" type="text" value="100">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Hire Assets (in/out) *</label>
                                <input class="form-control" name="slug" type="text" value="800">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Non-Owned Trailers *</label>
                                <input class="form-control" name="slug" type="text" value="39">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Operate unregistered plants</label>
                                <input class="form-control" name="slug" type="text" value="10">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Customer Goods*</label>
                                <input class="form-control" name="slug" type="text" value="100">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Risk Management Procedures *</label>
                                <input class="form-control" name="slug" type="text" value="Followed">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Engage sub contractors</label>
                                <input class="form-control" name="slug" type="text" value="Yes">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Labour Hire Employees (in/out) *</label>
                                <input class="form-control" name="slug" type="text" value="100">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Geographical Operations *</label>
                                <input class="form-control" name="slug" type="text" value="No">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Comply with safety legislation</label>
                                <input class="form-control" name="slug" type="text" value="Yes">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ibox">
            <div class="ibox-title">Questions</div>
            <div class="ibox-content">
                <ul class="todo-list m-t">
                    <li>
                        <input type="checkbox" value="" name="" class="i-checks" checked>
                        <span class="m-l-xs">HAS ANY PERSON WHO WILL WHO WILL DRIVE YOUR VEHICLE(S)</span>


                    </li>
                    <li>
                        <input type="checkbox" value="" name="" class="i-checks" checked>
                        <span class="m-l-xs">Had any convictions for driving under the influence of alcohol or drugs? </span>

                    </li>
                    <li>
                        <input type="checkbox" value="" name="" class="i-checks" checked>
                        <span class="m-l-xs">Had a licence cancelled/suspended in the last 5 years?</span>

                    </li>
                    <li>
                        <input type="checkbox" value="" name="" class="i-checks" checked>
                        <span class="m-l-xs">Ever had a claim declined by an insurer?</span>

                    </li>
                    <li>

                        <span class="m-l-xs">No of year that you want this policy?</span>
                        <input type="text" class="form-control" value="5">

                    </li>
                    <li>
                        <input type="checkbox" value="" name="" class="i-checks" checked>
                        <span class="m-l-xs">Do you have any health issue? if Yes please describe.</span>
                        <textarea class="form-control">There is not any medical history reported</textarea>
                    </li>
                </ul>
            </div>
            <div class="ibox-footer">
                <a href="{{ route('clients.products') }}" class="btn btn-default"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
@endsection
