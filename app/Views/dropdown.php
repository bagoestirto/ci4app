<!DOCTYPE html>
<html lang="en">

<head>
    <title>CodeIgniter 4 Dynamic Dependent Dropdown using jQuery Ajax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <h3>CodeIgniter 4 Dynamic Dependent Dropdown using jQuery Ajax</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">CodeIgniter 4 Dynamic Dependent Dropdown using jQuery Ajax</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="country">Country:</label>
                    <select id="country" name="country" class="form-control">
                        <option value="" selected disabled>Select Country</option>
                        <?php foreach ($countries as $key => $country) { ?>
                            <option value="<?= $country['id'] ?>"> <?= $country['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <select name="state" id="state" class="form-control"></select>
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <select name="city" id="city" class="form-control"></select>
                </div>
            </div>
        </div>
    </div>
    <script type=text/javascript>
        // when country dropdown changes
        $('#country').change(function() {

            var countryID = $(this).val();

            if (countryID) {

                $.ajax({
                    type: "GET",
                    url: "<?= base_url('getState') ?>",
                    data: {
                        country_id: countryID
                    },
                    success: function(res) {
                        var data = JSON.parse(res);
                        if (res) {

                            $("#state").empty();
                            $("#state").append('<option>Select State</option>');
                            $.each(data, function(key, value) {
                                $("#state").append('<option value="' + value.id + '">' + value.name +
                                    '</option>');
                            });

                        } else {

                            $("#state").empty();
                        }
                    }
                });
            } else {

                $("#state").empty();
                $("#city").empty();
            }
        });

        // when state dropdown changes
        $('#state').on('change', function() {

            var stateID = $(this).val();

            if (stateID) {

                $.ajax({
                    type: "GET",
                    url: "<?= base_url('getCity') ?>",
                    data: {
                        state_id: stateID
                    },
                    success: function(res) {
                        var data = JSON.parse(res);
                        if (res) {
                            $("#city").empty();
                            $("#city").append('<option>Select City</option>');
                            $.each(data, function(key, value) {
                                $("#city").append('<option value="' + value.id + '">' + value.name +
                                    '</option>');
                            });

                        } else {

                            $("#city").empty();
                        }
                    }
                });
            } else {

                $("#city").empty();
            }
        });
    </script>
</body>

</html>