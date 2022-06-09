@extends('layouts.app')
@section('title', 'Insurance Products')
@section('content')
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                Manage Insurance Products.
                <a href="{{ route('insurance.create') }}" class="btn btn-primary btn-sm float-right">
                    <i class="fa fa-plus"></i> Add insurance products
                </a>

            </div>
            <div class="ibox-content">
                <div class="mt-2">
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" width="1%">#</th>
                        <th scope="col" width="15%">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Risk Tags</th>
                        <th scope="col">Status</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Clients</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col" class="col-lg-2"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">11</th>
                        <td>Company Insurance Policy for 5 Year</td>
                        <td>Company</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>
                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">20</th>
                        <td>Company Insurance Policy for 10 Year</td>
                        <td>Company</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>

                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">19</th>
                        <td>Company Insurance Policy for 15 Year</td>
                        <td>Company</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>

                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">18</th>
                        <td>Business Insurance Structure Policy for 5 Year</td>
                        <td>Business</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>

                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">17</th>
                        <td>Business Insurance Interior Policy for 5 Year</td>
                        <td>Business</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>

                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>

                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16</th>
                        <td>Aircraft Travel Insurance</td>
                        <td>Aircraft</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>
                        Aircraft Full insurance 3 Year
                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td></td>
                        <td>Aircraft</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>

                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>Motorcar Full Insurance for 10 Year</td>
                        <td>Motorcar/Private</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>

                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>Motorcar Full Insurance for 3 Year</td>
                        <td>Motorcar/Private</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>

                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Motorcar Full Insurance for 5 Year</td>
                        <td>Motorcar/Private</td>
                        <td><span class="badge">Tag1</span> <span class="badge">Tag2</span> <span class="badge">Tag3</span> </td>

                        <td>
                            <span class="text-danger"> <i class="fa fa-lock"></i> Block</span>
                        </td>
                        <td>10</td>
                        <td>30</td>
                        <td>03-Jun-2022</td>
                        <td>03-Jun-2022</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-white btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-white text-warning btn-xs" title="Active this category"> <i class="fa fa-lock"></i> Status</a>
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="74dFCTvrTbvlTWg2EQG6TWXLaJn4mffDkdT09Fwd">
                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                    </tbody>

                </table>
                <div class="d-flex text-right">
                    <div class="pull-right">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                    <span class="page-link" aria-hidden="true">‹</span>
                                </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
