  <!-- Customer Details Modal -->
  <div class="modal fade" id="invoiceDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="customerDetailsModalLabel">Invoice Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <div id="printbdy">
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                      <img src="images/logos/logo-light.svg" alt="" />
                    </a>
                  </div>

                  <div class="mx-4">
                    <h3 >Name: <span id="onner-details-Name" style="font-weight: normal"></span></h3>
                    <h3 >Email: <span id="onner-details-Email"  style="font-weight: normal"> </span></h3>

                  </div>

                  <div class="col p-2 mx-3">
                    <h1>Product List</h1>

                    <table class="table text-center" id="tableData12">
                        <thead>
                        <tr class="bg-light">

                            <th>Name</th>
                            <th>qty</th>
                            <th>sale_price</th>


                        </tr>
                        </thead>
                        <tbody id="tableList12">

                        </tbody>
                    </table>
                </div>



              <div class=" p-4">

                {{-- <h3>Product Price: <span   id="pprice-details" ></span></h3> --}}
                <h3>Vat(5%): <span  id="vat-details" ></span></h3>

                <h3>Total: <span id="total-details" ></span></h3>

                {{-- <div class="col-4"> --}}
                    <h3>Discount(%): <span id="discount-details"></span></h3>
                   {{-- <input onkeydown="return false" value="0" min="0" type="number" step="0.25" onchange="DiscountChange()" class="form-control w-40 " id="discountP"/> --}}

                   {{-- <p> --}}

                    <h3>Payable: <span  id="payable-details" ></span></h3>




                   </div>







              </div>

              <button onclick="PrintInvoice()" class="btn btn-primary mx-4 my-3 bg-gradient-primary w-40 ">Print</button>

              {{-- <button class="btn delete-cus-btn btn-sm btn-danger" data-name="${item['name']}"  data-id="${item['id']}">Cancle</button> --}}

              <button onclick="CancleInvoice()" class="btn btn-success mx-2 my-3 bg-gradient-success w-40 ">Cancel</button>

      </div>
    </div>
  </div>
  <script src="jscode/invoice/invoice-details.js"></script>
