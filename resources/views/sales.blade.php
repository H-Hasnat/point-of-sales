

<div class="container-flux">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
              <img src="images/logos/logo-light.svg" alt="" />
            </a>
          </div>

          <div class="mx-4">
            <h3 >Name: <span id="onnerName" style="font-weight: normal"></span></h3>
            <h3 >Email: <span id="onnerEmail"  style="font-weight: normal"> </span></h3>

          </div>

          <div class="col p-2 mx-3">
            <h1>Product List</h1>

            <table class="table" id="tableData2">
                <thead>
                <tr class="bg-light">

                    <th>Name</th>
                    <th>qty</th>
                    <th>sale_price</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody id="tableList2">

                </tbody>
            </table>
        </div>

      </div>

      <div class=" p-4">

        <h3>Product Price: <span   id="pprice" ></span></h3>
        <h3>Vat(5%): <span  id="vat" ></span></h3>

        <h3>Total: <span id="total" ></span></h3>

        <div class="col-4">
            <h3>Discount(%): <span id="discount"></span></h3>
           <input onkeydown="return false" value="0" min="0" type="number" step="0.25" onchange="DiscountChange()" class="form-control w-40 " id="discountP"/>

           <p>

           </div>

        <h3>Payable: <span  id="payable" ></span></h3>



            <button onclick="AddCustomer()" class="btn btn-primary  my-3 bg-gradient-primary w-40 ">Confirm</button>
         </p>


      </div>

          <div class="row  align-self-center mx-2 gx-1">
            <div class=" col p-2">
            <h1>Customer</h1>

                <table class="table" id="tableData">
                    <thead>
                    <tr class="bg-light">

                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="tableList">

                    </tbody>
                </table>

            </div>
            <div class=" col p-2">
                <h1>Product</h1>

                <table class="table" id="tableData1">
                    <thead>
                    <tr class="bg-light">

                        <th>Name</th>
                        <th>price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="tableList1">

                    </tbody>
                </table>
            </div>




      </div>

    </div>

    <script src="jscode/sales.js"></script>


