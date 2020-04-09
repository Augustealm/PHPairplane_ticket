<?php include 'view/inc/functions.php'; ?>

<div class="container">
    <div class="offset-1 col-10 px-0 border border-primary rounded" >
        <div class="form-inline px-0">
            <p class="col-8 py-2 pl-3 mr-0 bg-primary font-weight-bolder">BOARDING PASS</p>
            <p class="col-4 py-2 pl-5 mr-0 pr-0 bg-primary font-weight-bolder text-center">BOARDING PASS</p>
        </div>
        <div class="col-1">
            <img src="img/bar.png" alt="Foto" class="img-fluid float-left pt-5 mr-3" alt="Responsive image">
        </div>
        <div class="col-12 ml-3 ml-5 pl-5 py-3">
            <div class="form-group form-inline mb-0">
                <div class="pl-0">
                    <p class="my-0 pl-4 ">PASSENGER NAME:</p>
                </div>
                <div class="font-weight-bold col-4 pr-0">
                    <?php echo $_POST["first_name"]; ?>
                    <?php echo $_POST["last_name"]; ?>
                </div>
                <div>
                    <p class="col-3 my-0 pl-2 ml-2">ID:</p>
                </div>
                <div class="ml-1 font-weight-bold">
                    <?php echo $_POST["ID"]; ?>
                </div>
            </div>
            <div class="form-inline">
                <div class="col-2 form-group mb-0 ml-3 mr-4 pl-2 ">
                    <div class="pl-0">
                        <p class="pt-4 mb-0">FLIGHT:</p>
                    </div>
                    <div class="font-weight-bold mr-5"">
                        <?php echo $_POST["flight_number"]; ?>
                    </div>
                </div>
                <div class="col-2 form-group mb-0 ml-3 mr-4">
                    <div class="pl-0">
                        <p class="pt-4 mb-0">FROM:</p>
                    </div>
                    <div class="font-weight-bold mr-5"">
                        <?php echo $_POST["from"]; ?>
                    </div>
                </div>
                <div class="col-2 form-group mb-0 mx-5 pl-5">
                    <div class="form-group mb-0">
                        <p class="pt-4 mb-0">TO:</p>
                    </div>
                    <div class="font-weight-bold mr-5"">
                        <?php echo $_POST["to"]; ?>
                    </div>
                </div>
                <div class="float-right ml-5 pl-3">
                    <i class="fab fa-avianex fa-5x bg-primary"></i>
                </div>
            </div>
            <div class="form-inline">
                <div class="col-2 form-group mb-0 mx-0 px-0">
                    <div class="pl-0">
                        <p class="pt-4 mb-0 pl-4">Date:</p>
                    </div>
                    <div class="font-weight-bold pl-4">
                        <?php echo input_date(); ?>
                    </div>
                </div>
                <div class="col-2 form-group mb-0 ml-5 mr-4 pl-4">
                    <div class="pl-0">
                        <p class="pt-4 mb-0">Baggage:</p>
                    </div>
                    <div class="font-weight-bold mr-5"">
                        <?php echo $_POST["baggage_weight"]." kg"; ?>
                    </div>
                </div>
                <div class="col-2 form-group mb-0 mx-5 pl-5">
                    <div class="form-group mb-0">
                        <p class="pt-4 mb-0 pl-2">Total price:</p>
                    </div>
                    <div class="font-weight-bold pr-0 mr-0 pl-2">
                        <?php echo makeTicketPrice($_POST["baggage_weight"], $_POST["price"]). " eur"; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-inline px-0">
            <h5 class="col-12 mb-0 mr-0 bg-primary">Airlines</h5>
        </div>
    </div>
</div>

