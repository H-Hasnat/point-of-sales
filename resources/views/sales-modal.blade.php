

<!-- Modal -->
<div class="modal fade" id="qtyModal" tabindex="-1" aria-labelledby="qtyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qtyModalLabel">Enter Quantity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="qtyForm">
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" min="1" placeholder="Enter quantity" required>
                        <input type="number" class="form-control" id="pro_id">

                        <input type="text" name="" id="total-sales">
                        <input type="text" name="" id="cus_id">


                        <input type="text" name="" id="Discount">
                        <input type="text" name="" id="Vat">
                        <input type="text" name="" id="Payable">

                        {{-- <input type="text" name="" id="Pro_price"> --}}



                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="pro-qty-close"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                <button type="button" class="btn btn-primary" onclick="submitQtyForm()">Save</button>
            </div>
        </div>
    </div>
</div>

<script src="jscode/sales-modal.js"></script>
