@extends('layouts.simple.master')

@section('title', 'API')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>API DataTables</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Data Tables</li>
                        <li class="breadcrumb-item active">API DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid datatable-api-wrapper">
        <div class="row"><!-- Add rows  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5 class="mb-3">Add Rows </h5>
                        <p class="f-m-light mt-1">New rows can be added to a DataTable using the <code class="api"
                                title="DataTables API method">row.add()</code> API method.
                            Simply call the API function with the data for the new row (be it an array or
                            object). Multiple rows
                            can be added using the <code class="api" title="DataTables API method">rows.add() </code>
                            method (note
                            the plural). Data can likewise be updated with the <code class="api"
                                title="DataTables API method">row().data() </code> and <code class="api"
                                title="DataTables API method">row().remove() </code> methods.</p>
                        <p class="f-m-light mt-1">Note that in order to see the new row in the table you
                            must call the <code class="api" title="DataTables API method">draw() </code>
                            method, which is easily done through the chaining that the DataTables API
                            employs.</p>
                    </div>
                    <div class="card-body"><button class="btn btn-primary mb-3" id="addRow">Add New
                            Row</button>
                        <div class="table-responsive custom-scrollbar">
                            <table class="display add-row-table" id="API-1">
                                <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                        <th>Column 4</th>
                                        <th>Column 5</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                        <th>Column 4</th>
                                        <th>Column 5</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Add rows Ends--><!-- Child rows (show extra / detailed information) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5 class="mb-3">Child Rows (show extra / detailed information) </h5>
                        <p class="f-m-light mt-1">The DataTables API has a number of methods for attaching
                            child rows to a parent row in the DataTable. This can be used to show additional
                            information about a row, useful for cases where you wish to convey more
                            information about a row than there is space for in the host table.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar child-row-table">
                            <table class="display table-striped" id="API-child-row">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Child rows (show extra / detailed information) Ends--><!-- Row Selection And Deletion (Single Row) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5 class="mb-3">Row Selection and Deletion (Single Row)</h5>
                        <p class="f-m-light mt-1">It can be useful to provide the user with the option to
                            select rows in a DataTable. This can be done by using a click event to add /
                            remove a class on the
                            table rows. The <code class="api" title="DataTables API method">rows().data()</code>method
                            can then
                            be used to get the data for the selected rows. In this case it is simply
                            counting the number of selected rows, but much more complex interactions can
                            easily be
                            developed.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar row-selection-table"><button
                                class="btn btn-secondary mb-3" id="single-row-delete-btn">Delete
                                Row</button>
                            <table class="display selection-deletion" id="row-select-delete">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Job Designation</th>
                                        <th>Company Name</th>
                                        <th>Invoice No.</th>
                                        <th>Credit/Debit</th>
                                        <th>Date</th>
                                        <th>Priority</th>
                                        <th>Budget</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Tata Co.</td>
                                        <td>#AS61</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2011/04/25</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$320.800,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Edinburgh</td>
                                        <td>#FG63</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2011/07/25</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$170.750,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>Mphasis Ltd</td>
                                        <td>#GH66</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2009/01/12</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$86.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>#UH22</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2012/03/29</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$433.060,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Google Inc.</td>
                                        <td>#TY33</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2008/11/28</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$162.700,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>Microsoft</td>
                                        <td>#TS61</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2012/12/02</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$372.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>Google Co.</td>
                                        <td>#GF59</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2012/08/06</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$137.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>#FT55</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2010/10/14</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$327.900,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>Google Co.</td>
                                        <td>#NB39</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">2.8%</i>
                                        </td>
                                        <td>2009/09/15</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$205.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>#BH23</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2008/12/13</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$103.600,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>Tata Co.</td>
                                        <td>#HN30</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2008/12/19</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$90.560,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>#YH22</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2013/03/03</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$342.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>Google Co.</td>
                                        <td>#FV36</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2008/10/16</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$470.600,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>Tata Co.</td>
                                        <td>#TF43</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2012/12/18</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$313.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>Infosys Ltd.</td>
                                        <td>#DF19</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2010/03/17</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$385.750,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>Infosys Ltd.</td>
                                        <td>#HD66</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2012/11/27</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$198.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>#NH64</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i>
                                        </td>
                                        <td>2010/06/09</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$725.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>#MN59</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2009/04/10</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$237.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>Tata Co.</td>
                                        <td>#JH41</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i>
                                        </td>
                                        <td>2012/10/13</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$132.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>#YT35</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2012/09/26</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$217.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>#GH45</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2011/09/03</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$345.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>#VB40</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i>
                                        </td>
                                        <td>2009/06/25</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$675.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>#CV21</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2011/12/12</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$106.450,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>#BH23</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i>
                                        </td>
                                        <td>2010/09/20</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$85.600,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>Tata Co.</td>
                                        <td>#VC47</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2009/10/09</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$1.200.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>#TH42</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i>
                                        </td>
                                        <td>2010/12/22</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$92.575,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>#BN28</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2010/11/14</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$357.650,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>Google Co.</td>
                                        <td>#CV28</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2011/06/07</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$206.850,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>Infosys Ltd.</td>
                                        <td>#GF48</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i>
                                        </td>
                                        <td>2010/03/11</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$850.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>#BF20</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i>
                                        </td>
                                        <td>2011/08/14</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$163.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>#DF37</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2011/06/02</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$95.400,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>Infosys Ltd.</td>
                                        <td>#ER53</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2009/10/22</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$114.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>Tata Co.</td>
                                        <td>#DF27</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i>
                                        </td>
                                        <td>2011/05/07</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$145.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>Google Co.</td>
                                        <td>#SW22</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i>
                                        </td>
                                        <td>2008/10/26</td>
                                        <td><span class="badge badge-light-danger">Urgent</span></td>
                                        <td>$235.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>#ED46</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2011/03/09</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$324.050,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>Infosys Ltd.</td>
                                        <td>#ED47</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i>
                                        </td>
                                        <td>2009/12/09</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$85.675,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>Google Co.</td>
                                        <td>#WS51</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i>
                                        </td>
                                        <td>2008/12/16</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$164.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>Infosys Ltd.</td>
                                        <td>#RG41</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i>
                                        </td>
                                        <td>2010/02/12</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$109.850,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>Infosys Ltd.</td>
                                        <td>#TY62</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2009/02/14</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$452.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>Tata Co.</td>
                                        <td>#GH37</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i>
                                        </td>
                                        <td>2008/12/11</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$136.200,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>#YU65</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i>
                                        </td>
                                        <td>2008/09/26</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$645.750,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>#GH64</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2011/02/03</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$234.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>Tata Co.</td>
                                        <td>#UY38</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i>
                                        </td>
                                        <td>2011/05/03</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$163.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>#RT37</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2009/08/19</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$139.575,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>#WE61</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i>
                                        </td>
                                        <td>2013/08/11</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$98.540,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>Google Co.</td>
                                        <td>#YU47</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2009/07/07</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$87.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>#QW64</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i>
                                        </td>
                                        <td>2012/04/09</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$138.575,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>#WE63</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i>
                                        </td>
                                        <td>2010/01/04</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$125.250,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>Google Co.</td>
                                        <td>#ER56</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i>
                                        </td>
                                        <td>2012/06/01</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$115.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>#RT43</td>
                                        <td> <i class="icofont icofont-arrow-up me-1 text-success">2.8%</i>
                                        </td>
                                        <td>2013/02/01</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$75.650,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>#TY46</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2011/12/06</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$145.600,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>Tata Co.</td>
                                        <td>#QA47</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2011/03/21</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$356.250,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>Tata Co.</td>
                                        <td>#QS21</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2009/02/27</td>
                                        <td><span class="badge badge-light-warning">Medium</span></td>
                                        <td>$103.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>Infosys Ltd.</td>
                                        <td>#ED30</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2010/07/14</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$86.500,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>#SD51</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2008/11/13</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$183.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>#RF29</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2011/06/27</td>
                                        <td><span class="badge badge-light-success">Low</span></td>
                                        <td>$183.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>#GD27</td>
                                        <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i>
                                        </td>
                                        <td>2011/01/25</td>
                                        <td><span class="badge badge-light-primary">High</span></td>
                                        <td>$112.000,00</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="delete"><a href="#"><i
                                                            class="fa-solid fa-trash-can"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Job Designation</th>
                                        <th>Company Name</th>
                                        <th>Invoice No.</th>
                                        <th>Credit/Debit</th>
                                        <th>Date</th>
                                        <th>Priority</th>
                                        <th>Budget</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row Selection And Deletion (Single Row) Ends--><!-- Multiple table control elements  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5 class="mb-3">Custom filtering - range search</h5>
                        <p class="f-m-light mt-1">This example shows a search being performed on the age
                            column in the data, based upon two inputs.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive dataTables_wrapper me-0 custom-scrollbar">
                            <table>
                                <tbody class="dataTables_filter">
                                    <tr>
                                        <td>Minimum Age:</td>
                                        <td><input class="form-control" id="min" type="search" name="min">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Maximum Age:</td>
                                        <td><input class="form-control" id="max" type="search" name="max">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive user-datatable custom-scrollbar">
                            <table class="display table-striped custom-filtering-table" id="datatable-range">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/2.png') }}" alt="">Tiger Nixon
                                        </td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>25/04/2011</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td> <img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/7.jpg') }}" alt="">Garrett
                                            Winters
                                        </td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>25/07/2011</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td> <img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/11.png') }}" alt="">Ashton Cox
                                        </td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>12/01/2024</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td> <img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/3.png') }}" alt="">Cedric Kelly
                                        </td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>29/03/2012</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/2.jpg') }}" alt="">Airi Satou
                                        </td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>28/11/2008</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/7.jpg') }}" alt="">Brielle
                                            Williamson
                                        </td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>02/12/2012</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/3.jpg') }}" alt="">Herrod
                                            Chandler
                                        </td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>06/08/2012</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/6.jpg') }}" alt="">Rhona
                                            Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>14/10/2010</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                alt="">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>15/09/2009</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                alt="">Sonya
                                            Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>20/12/2018</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                alt="">Jena
                                            Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>19/12/2008</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                alt="">Quinn
                                            Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>03/03/2013</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                alt="">Charde
                                            Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>16/10/2018</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                alt="">Haley
                                            Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>18/12/2012</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                alt="">Tatyana
                                            Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>17/03/2010</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                alt="">Michael
                                            Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>27/11/2012</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                alt="">Paul
                                            Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>09/06/2021</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                alt="">Gloria
                                            Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>10/04/2009</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                                alt="">Bradley
                                            Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>13/10/2012</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                alt="">Dai Rios
                                        </td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>06/09/2020</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/1.jpg') }}"
                                                alt="">Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>03/09/2022</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                alt="">Yuri
                                            Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>25/06/2024</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                alt="">Caesar
                                            Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>12/12/2012</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                alt="">Doris
                                            Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>20/09/2020</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                alt="">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>09/10/2009</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/6.jpg') }}"
                                                alt="">Gavin
                                            Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>22/12/2015</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                alt="">Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>14/11/2011</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/8.jpg') }}"
                                                alt="">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>07/06/2011</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/9.jpg') }}"
                                                alt="">Fiona
                                            Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>11/03/2010</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                alt="">Shou
                                            Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>14/08/2011</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/11.jpg') }}"
                                                alt="">Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>02/06/2011</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                alt="">Suki
                                            Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>22/10/2009</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/14.png') }}" alt="">Prescott
                                            Bartlett
                                        </td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>07/05/2011</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/3.jpg') }}" alt="">Gavin Cortez
                                        </td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>26/10/2008</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/7.jpg') }}" alt="">Martena
                                            Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>09/03/2011</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/10.jpg') }}" alt="">Unity
                                            Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>09/12/2019</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/12.png') }}" alt="">Howard
                                            Hatfield
                                        </td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>16/12/2008</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/1.jpg') }}" alt="">Hope Fuentes
                                        </td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>12/02/2010</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/2.jpg') }}" alt="">Vivian
                                            Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>14/02/2009</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/6.jpg') }}" alt="">Timothy
                                            Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>11/12/2008</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/2.jpg') }}"
                                                alt="">Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>26/09/2008</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/3.jpg') }}"
                                                alt="">Olivia
                                            Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>03/02/2011</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/4.jpg') }}"
                                                alt="">Bruno
                                            Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>03/05/2013</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/5.jpg') }}"
                                                alt="">Sakura
                                            Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>19/08/2009</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/6.jpg') }}"
                                                alt="">Thor
                                            Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>11/08/2013</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard-11/user/7.jpg') }}"
                                                alt="">Finn
                                            Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>07/07/2008</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                alt="">Serge
                                            Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>09/04/2010</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/3.jpg') }}"
                                                alt="">Zenaida
                                            Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>04/01/2010</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/4.jpg') }}"
                                                alt="">Zorita
                                            Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>01/06/2012</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/5.jpg') }}"
                                                alt="">Jennifer
                                            Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>01/02/2013</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/6.jpg') }}"
                                                alt="">Cara
                                            Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>06/12/2011</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/7.jpg') }}"
                                                alt="">Hermione
                                            Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>21/03/2011</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/10.jpg') }}"
                                                alt="">Lael
                                            Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>27/02/2009</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/11.jpg') }}"
                                                alt="">Jonas
                                            Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>14/07/2010</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/12.jpg') }}"
                                                alt="">Shad
                                            Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>13/11/2008</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/13.jpg') }}"
                                                alt="">Michael
                                            Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>27/06/2005</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/dashboard/user/2.jpg') }}"
                                                alt="">Donna
                                            Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>25/01/2011</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Multiple table control elements Ends-->
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom2.js') }}"></script>
@endsection
