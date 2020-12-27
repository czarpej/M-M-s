<?php

class HardwareViewAdd
{
    public static function render(array $params = array())
    {
        ob_start();
?>
        <?= Layout::header($params); ?>

        <form class='col-12' method='POST'>
            <div class='row col-12'>
                <div class='col-6'>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
                    </div>
                </div>

                <div class='row col-12'>
                    <div class='col-6'>
                        <div class="form-group">
                            <label for="SerialNumber">Serial Number</label>
                            <input type="number" class="form-control" id="SerialNumber" name="SerialNumber" placeholder="Serial Number">
                        </div>
                    </div>
                    <div class='col-6'>
                        <div class="form-group">
                            <label for="InvoiceNumber">Invoice Number</label>
                            <!-- <input type="number" class="form-control" id="InvoiceNumber" name="InvoiceNumber" placeholder="Invoice Number"> -->
                            <select class="form-control" id="InvoiceNumber" name="InvoiceNumber">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row col-12">
                    <div class='col-6'>
                        <div class="form-group">
                            <label for="NetValue">Net Value</label>
                            <input type="number" class="form-control" id="NetValue" name="NetValue" placeholder="Net Value">
                        </div>
                    </div>
                    <div class='col-6'>
                        <div class="form-group">
                            <label for="WarrantyDate">Warranty Date</label>
                            <input type="date" class="form-control" id="WarrantyDate" name="WarrantyDate" placeholder="Warranty Date">
                        </div>
                    </div>
                </div>

                <div class="row col-12">
                    <div class='col-6'>
                        <div class="form-group">
                            <label for="HardwareUser">Hardware User</label>
                            <!-- <input type="text" class="form-control" id="HardwareUser" name="HardwareUser" placeholder="Hardware User"> -->
                            <select class="form-control" id="HardwareUser" name="HardwareUser">
                            </select>
                        </div>
                    </div>
                    <div class='col-6'>
                        <div class="form-group">
                            <label for="Note">Note</label>
                            <input type="text" class="form-control" id="Note" name="Note" placeholder="Note">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-12">
                <div class='col-4 offset-md-4'>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-user btn-block form-control-input" id="AddEqSubmit">
                    </div>
                </div>
            </div>
        </form>

        <div class='info'>
        </div>

        <?= Layout::footer() ?>
<?php
        $html = ob_get_clean();
        return $html;
    }
}