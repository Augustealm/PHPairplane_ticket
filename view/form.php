<?php include 'view/inc/validation.php'; ?>

<div class="container">
    <section>
        <h3>Passenger information</h3>
        <?php
        if (isset($_POST['send']) && !empty(val())) {
            foreach (val() as $er_value):?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $er_value;?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            endforeach;
        }?>

        <form method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="ID" placeholder="Personal ID-number"  value ="<?= isset($_POST["a_k"]) ? $_POST["a_k"] : "";?>">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="first_name" placeholder="Name"  value="<?= isset($_POST["first_name"]) ? $_POST["first_name"] : "";?>">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="last_name" placeholder="Family name"  value="<?= isset($_POST["last_name"]) ? $_POST["last_name"] : "";?>">
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="price" placeholder="Ticket price">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="comm" id="comm" cols="15" rows="3" placeholder="Leave your comment"><?= isset($_POST["comm"]) ? $_POST["comm"] : "";?></textarea>
            </div>
            <h3>Flight information</h3>
            <label>From</label>
            <select name="from">
                <option value="" disabled selected></option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea</option>
                <option value="NewZealand">New Zealand</option>
                <option value="India">India</option>
                <option value="Thailand">Thailand</option>
                <option value="Bali">Bali</option>
            </select>
            <label>Destination</label>
            <select name="to">
            <option value="" disabled selected></option>
            <option value="Spain">Spain</option>
            <option value="UK">United Kingdom</option>
            <option value="Germany">Germany</option>
            <option value="Turkey">Turkey</option>
            <option value="France">France</option>
            <option value="US">United States</option>
            </select>
            <label>Flight Number</label>
            <select name="flight_number">
                <option value="" disabled selected></option>
                <option value="ASA1">ASA1</option>
                <option value="WAJ1">WAJ1</option>
                <option value="AAL1">AAL1</option>
                <option value="BAW1">BAW1</option>
                <option value="DAE1">DAE1</option>
                <option value="UAE1">UAE1</option>
            </select>
            <label>Baggage weight</label>
            <select name="baggage_weight">
                <option value="10" disabled selected></option>
                <option value="10">10 kg</option>
                <option value="20">20 kg</option>
                <option value="25">25 kg</option>
                <option value="32">32 kg</option>
                <option value="45">45 kg</option>
                <option value="52">52 kg</option>
            </select>
            <div class="form-group">
                <button class="form-control btn btn-secondary" value="send" type="submit" name="send">Submit</button>
            </div>
        </form>
    </section>
</div>