<?php

class DocViewShow
{
    public static function render(array $params = array())
    {
        ob_start();
?>
        <?= Layout::header($params); ?>

        <div class="InvoicesFound card">
        <div class='card-header'>
            <div class="row">
                <div class='col-6'>
                    <form method="post">
                        <div class='row'>
                            <label for="search_Hardware_number">Document Name: </label>
                            <input type="search" placeholder="Hardware Number" id="search_document_name" name="search_document_name" class='form-control search_user' value="document">
                        </div>
                        <div class='row justify-content-center'>
                            <div class="form-group  col-8">
                                <input type="submit" class="btn btn-primary btn-user btn-block form-control-input mt-2" id="DocumentName" name="DocumentName">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <h5 class="card-header">Found Documents</h5>
            <div class="card-body">
                <!-- Earnings (Monthly) Card Example -->
                <a href='document.pdf' target='_blank'>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto mr-2">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>

                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Document Name
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">

                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">example-document-name.pdf</div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Earnings (Monthly) Card Example -->
                <a href='document.pdf' target='_blank'>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto mr-2">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>

                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Document Name
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">

                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">example-document-name.pdf</div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Earnings (Monthly) Card Example -->
                <a href='document.pdf' target='_blank'>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto mr-2">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>

                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Document Name
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">

                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">example-document-name.pdf</div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <?= Layout::footer() ?>
<?php
        $html = ob_get_clean();
        return $html;
    }
}
