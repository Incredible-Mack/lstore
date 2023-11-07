@extends('admin.layout.main')

@section('breadcrumb')
<x-bread-crumb heading="Dashboard" links='dddd' />
@endsection

@section('maincontent')
    <div class="row">
        <x-cards class="bg-danger" title="Pending Order" count='301' icon='ion ion-bag' />
        <x-cards class="bg-primary" title="New Customer This Month" count='201' icon="ion ion-person" />

        <x-cards class="bg-secondary" title="Active User" count='101' icon='ion ion-person' />
        <x-cards class="bg-primary" title="Order Received" count='201' icon='ion ion-android-checkbox' />

        {{-- sales Trend --}}
        <div class="col-12 col-md-6 ">

            @php
                // Your dynamic data (replace this with your actual data retrieval logic)
                $labels = ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
                $dataSet1 = [1200, 2300, 2800, 2200, 2900, 2600, 3200];
                $dataSet2 = [800, 2000, 3100, 1800, 1900, 1600, 4000];
            @endphp

            <x-sales-trends chartid='sales-chart' />


        </div>
        <div class="col-12 col-md-6 ">
            <x-sales-trends chartid='visitors-chart' title='Most Selling Category' />
        </div>

        {{-- endSaleTrend --}}

        <div class="col-12 col-md-3">
            <div class="card">

                <div class="card-body">

                    <h3 class="card-title font-weight-bold">Recent Activity</h3>
                    <br>
                    <ul>
                        <li>Ordered Books</li>
                        <li>Registered User</li>
                        <li>Ordered Books</li>
                        <li>Ordered Books</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-9">
            <div class="card">
                <div class="card">
                    <div class="card-header border-0">

                        <h3 class="card-title font-weight-bold">Recent Order</h3>
                        <div class="card-tools">
                            
                            <a href="#" class="btn btn-tool btn-sm" title="View All">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Some Product
                                    </td>
                                    <td>$13 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            12%
                                        </small>
                                        12,000 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Another Product
                                    </td>
                                    <td>$29 USD</td>
                                    <td>
                                        <small class="text-warning mr-1">
                                            <i class="fas fa-arrow-down"></i>
                                            0.5%
                                        </small>
                                        123,234 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Amazing Product
                                    </td>
                                    <td>$1,230 USD</td>
                                    <td>
                                        <small class="text-danger mr-1">
                                            <i class="fas fa-arrow-down"></i>
                                            3%
                                        </small>
                                        198 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Perfect Item
                                        <span class="badge bg-danger">NEW</span>
                                    </td>
                                    <td>$199 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            63%
                                        </small>
                                        87 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>





    </div>

    <script>
        // Pass dynamic data to your JavaScript
        var chartData = {
            labels: @json($labels),
            dataSet1: @json($dataSet1),
            dataSet2: @json($dataSet2)
        };
    </script>
@endsection
