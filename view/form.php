<section class="user-info">
<?php

    if (isset($_POST['send'])) {
        $ID = $_POST["ID"];
        $name = $_POST["first_name"];
        $from = $_POST["from"];
        $to = $_POST["to"];
        $flight = $_POST["flight_number"];
        $last_name = $_POST["last_name"];
        $baggage_weight = $_POST["baggage_weight"];
        $price = $_POST["price"];

    }

    ?>

</section>
<div class="container">
    <section>
        <h3>Passenger information</h3>
        <form method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="ID" placeholder="Personal ID-number">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="first_name" placeholder="Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="last_name" placeholder="Family name">
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="price" placeholder="Ticket price">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" id="" cols="15" rows="3"
                          placeholder="Leave your comment"></textarea>
            </div>
            <h3>Flight information</h3>
            <label>From</label>
            <select name="from">
                <option value="Japan">Japan</option>
                <option value="Korea">Korea</option>
                <option value="NewZealand">New Zealand</option>
                <option value="India">India</option>
                <option value="Thailand">Thailand</option>
                <option value="Bali">Bali</option>
            </select>
            <label>Destination</label>
            <select name="to"">
                <option value="Spain">Spain</option>
                <option value="UK">United Kingdom</option>
                <option value="Germany">Germany</option>
                <option value="Turkey">Turkey</option>
                <option value="France">France</option>
                <option value="US">United States</option>
            </select>
            <label>Flight Number</label>
            <select name="flight_number">
                <option value="ASA1">ASA1</option>
                <option value="WAJ1">WAJ1</option>
                <option value="AAL1">AAL1</option>
                <option value="BAW1">BAW1</option>
                <option value="DAE1">DAE1</option>
                <option value="UAE1">UAE1</option>
            </select>
            <label>Baggage weight</label>
            <select name="baggage_weight">
                <option value="10">10 kg</option>
                <option value="20">20 kg</option>
                <option value="25">25 kg</option>
                <option value="32">32 kg</option>
                <option value="45">45 kg</option>
                <option value="52">52 kg</option>
            </select>
            <div class="form-group">
                <button class="form-control btn btn-secondary" type="submit" name="send">Submit</button>
            </div>
        </form>
    </section>
</div>
