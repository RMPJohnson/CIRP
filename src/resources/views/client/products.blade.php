@extends('layouts.app')
@section('title', 'Customer Products')
@section('content')
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                Manage Products.
            </div>
            <div class="ibox-content">
                <div class="mt-2">
                    @include('layouts.partials.messages')
                </div>
                <div class="text-info mt-4 mb-3">
                You have subscribed following products and borker information. if you want to see
                complete detail of your insurance then click on Policy Number.
                </div>
                <div class="table-responsive">
                    <table class="table table-hover issue-tracker">
                    <tbody>
                    <tr>
                        <td>
                            <span class="label label-primary">Added</span>
                        </td>
                        <td class="issue-info">
                            <a class="text-info" href="{{ route('clients.show',1) }}"><h3>POLICY-2390-020-1</h3></a>
                            <div class="text-dark mt-2">
                                Motorcar Full Insurance for 10 Year [Motorcar/Private]
                            </div>
                        </td>
                        <td>
                            Adrian Novak
                        </td>
                        <td>
                            12.02.2015 10:00 am
                        </td>
                        <td>
                            <span>Active</span>
                        </td>
                        <td class="text-right">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label label-primary">Added</span>
                        </td>
                        <td class="issue-info">
                            <a href="{{ route('clients.show',1) }}" class="text-info"><h3>POLICY-2390-020-6</h3></a>

                            <div class="text-dark mt-2">
                                Aircraft Full insurance 3 Year [Aircraft]
                            </div>
                        </td>
                        <td>
                            Anna Smith
                        </td>
                        <td>
                            10.02.2015 05:32 am
                        </td>
                        <td>
                            Closed
                        </td>
                        <td class="text-right">

                        </td>
                    </tr>

                    </tbody>
                </table>
                </div>

            </div>
        </div>
    </div>
@endsection
