@extends('layouts.app')
@section('title', 'Customer Management')
@section('content')
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                Manage Customer.
                <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm float-right">
                    <i class="fa fa-plus"></i> Add a customer
                </a>

            </div>
            <div class="ibox-content">
                <div class="mt-2">
                    @include('layouts.partials.messages')
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" width="1%">#</th>
                        <th scope="col">Policy #</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Broker</th>
                        <th scope="col">Products</th>
                        <th scope="col" width="20%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><a href="">1</a></th>
                        <td>839-920-2902</td>
                        <td>client@gmail.com</td>
                        <td>cleint 1</td>
                        <td>839-920-2902</td>
                        <td><span class="text-success"><i class="fa fa-unlock"></i> Active</span>
                        </td>
                        <td><a href="#">Broker 1</a> </td>
                        <td><a href="#">3</a> </td>
                        <td>
                            <div class="btn-group">
                                <a href="" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="zvBSV3hyYR3SHhmCn66b81sPMKi1XMrgyr6AF6su">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="">2</a></th>
                        <td>839-920-2902</td>
                        <td>client@gmail.com</td>
                        <td>cleint 1</td>
                        <td>839-920-2902</td>
                        <td><span class="text-success"><i class="fa fa-unlock"></i> Active</span>
                        </td>
                        <td><a href="#">Broker 1</a> </td>
                        <td><a href="#">3</a> </td>
                        <td>
                            <div class="btn-group">
                                <a href="" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="zvBSV3hyYR3SHhmCn66b81sPMKi1XMrgyr6AF6su">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="">3</a></th>
                        <td>839-920-2902</td>
                        <td>client2@gmail.com</td>
                        <td>client Jakeson</td>
                        <td>839-920-2902</td>
                        <td><span class="text-success"><i class="fa fa-info-circle"></i> Completed</span>
                        </td>
                        <td><a href="#">Broker 2</a> </td>
                        <td><a href="#">2</a> </td>
                        <td>
                            <div class="btn-group">

                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-success btn-xs" title="Block this category"> <i class="fa fa-unlock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="zvBSV3hyYR3SHhmCn66b81sPMKi1XMrgyr6AF6su">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="#">4</a></th>
                        <td>839-920-2902</td>
                        <td>client2@gmail.com</td>
                        <td>client Jeo</td>
                        <td>839-920-2902</td>
                        <td><span class="text-success"><i class="fa fa-spinner"></i> Wait for Approval</span>
                        </td>
                        <td><a href="#">Broker 5</a> </td>
                        <td><a href="#">3</a> </td>
                        <td>
                            <div class="btn-group">

                                <a href="" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="" class="btn btn-white text-success btn-xs" title="Block this category"> <i class="fa fa-unlock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="zvBSV3hyYR3SHhmCn66b81sPMKi1XMrgyr6AF6su">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="#">6</a></th>
                        <td>839-920-2902</td>
                        <td>client2@gmail.com</td>
                        <td>client Jeo</td>
                        <td>839-920-2902</td>
                        <td><span class="text-success"><i class="fa fa-spinner""></i> Wait for Approval</span>
                        </td>
                        <td><a href="#">Broker 5</a> </td>
                        <td><a href="#">3</a> </td>
                        <td>
                            <div class="btn-group">

                                <a href="" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="" class="btn btn-white text-success btn-xs" title="Block this category"> <i class="fa fa-unlock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="zvBSV3hyYR3SHhmCn66b81sPMKi1XMrgyr6AF6su">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="#">7</a></th>
                        <td>839-920-2902</td>
                        <td>client2@gmail.com</td>
                        <td>client Jeo</td>
                        <td>839-920-2902</td>
                        <td><span class="text-success"><i class="fa fa-warning"></i> Closed</span>
                        </td>
                        <td><a href="#">Broker 5</a> </td>
                        <td><a href="#">3</a> </td>
                        <td>
                            <div class="btn-group">

                                <a href="" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="" class="btn btn-white text-success btn-xs" title="Block this category"> <i class="fa fa-unlock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="zvBSV3hyYR3SHhmCn66b81sPMKi1XMrgyr6AF6su">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
