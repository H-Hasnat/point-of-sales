@extends('layout.layout')

@section('content')
    <div class="container my-5 p-4 border rounded shadow-sm bg-light">
        <h3 class="text-center mb-4">Date Range Selection</h3>
        <div class="row g-3">
            <!-- Start Date -->
            <div class="col-lg-5">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" placeholder="Select start date">
            </div>

            <!-- End Date -->
            <div class="col-lg-5">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" placeholder="Select end date">
            </div>

            <!-- Submit Button -->
            <div class="col-2 d-flex align-items-end">
                {{-- <button class="btn btn-primary " id="reportmodal">Search</button> --}}
                <button id="report" class="btn btn-primary" onclick="SearchReport()">Search</button>

            </div>
        </div>
    </div>



    <div class="modal fade" id="Report-download-Modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">



                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Report Download</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                <div id="pdfContent">

                    <div class="modal-body">
                        <!-- Summary Section -->
                        <div class="card mb-5 shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Summary</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="DataTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Report</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Discount(%)</th>
                                            <th>Vat</th>
                                            <th>Payable</th>
                                        </tr>
                                    </thead>
                                    <tbody id="TableList">

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Details Section -->
                        <div class="card shadow-sm">
                            <div class="card-header bg-secondary text-white">
                                <h5 class="mb-0">Details</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="DataTable1">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Customer</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Discount(%)</th>
                                            <th>Vat</th>
                                            <th>Payable</th>
                                        </tr>
                                    </thead>
                                    <tbody id="TableList1">

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    
                </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="DownloadPDF()">Download</button>
                    </div>





            </div>
        </div>
    </div>


    <script src="jscode/report.js"></script>
@endsection
