
<div 
    class="modal fade bd-example-modal-xl" 
    id="order_item_qty_price_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="order_item_qty_price_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title m-0 font-weight-bold text-primary" id="order_item_qty_price_modal_title">Set Order Item</h5>
            </div>
            <form id="order_set_item_form" action="#" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-4 mb-4 form-group">
                            <label for="order_item_qty">Qty</label>
                            <input type="hidden" class="form-control" name="order_item_id" id="order_item_id">
                            <input type="hidden" class="form-control" name="order_item_name" id="order_item_name">
                            <input type="number" class="form-control text-center" name="order_item_qty" id="order_item_qty">
                        </div>
                        <div class="col-md-4 mb-4 form-group">
                        <label for="order_item_price">Price</label>
                            <input type="text" class="form-control text-right" name="order_item_price" id="order_item_price" hidden="true">
                            <input type="text" class="form-control text-right" name="order_item_priceD" id="order_item_priceD" disabled="true">
                        </div>
                        <div class="col-md-4 mb-4 form-group">
                        <label for="order_item_amount">Amount</label>
                            <input type="text" class="form-control text-right" name="order_item_amount" id="order_item_amount" hidden="true">
                            <input type="text" class="form-control text-right" name="order_item_amountD" id="order_item_amountD" disabled="true">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="order_item_qty_price_save" name="order_item_qty_price_save" class="btn btn-danger">Save</button>
                    <button type="button" id="order_item_qty_price_cancel" name="order_item_qty_price_cancel" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>