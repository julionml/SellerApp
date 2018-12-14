<!doctype html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>

<div class="container-fluid">
    <ul class="nav nav-pills pull-right">
        <li class="active"><a href="https://cloudcoin.global/">Home</a></li>
    </ul>
    <section class="container">
        <div class="container-page">

            <h3 class="dark-grey text-center">We Buy CloudCoins!</h3>
            <h3 class="dark-grey text-center">Today's Price: $.001 (1/10th of a cent each)</h3>
            <h3 class="dark-grey text-center">We turn CloudCoins into dollars on PayPal</h3>




            <div class="text-justify">
                <h3 class="dark-grey ">REQUIRMENTS:</h3>
                <ol>
                    <li>
                        You must have a valid PayPal account
                    </li>

                    <li>
                        You must have your CloudCoins in a single stack file.
                    </li>

                    <li>
                        No more than $500 CloudCoins purchased per customer per day.

                    </li>

                </ol>

                <h3 class="dark-grey ">INSTRUCTIONS:</h3>
                <ol>
                    <li>
                        Fill out the form and include your PayPal account and attach your stack file.
                    </li>

                    <li>
                        Upload your authentic CloudCoins
                    </li>

                    <li>
                        You will receive a receipt number and a print out of the authentication of each of your CloudCoins.
                        You may want to record this.

                    </li>

                    <li>
                        Wait for dollars to be put into your PayPal account. This is done manually and should happen within 24 hours.
                    </li>

                    <li>
                        If you do not receive your dollars or have any other problems, call support.
                    </li>

                </ol>


            </div>
            <div class="col-md-6">
                <form class="m-t-15"  method="POST" action="{{url('/')}}" >

                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                    <div class="form-group col-lg-12">
                        <label>PaypalAddress</label>
                        <input type="email" name="PaypalAddress" class="form-control"required>
                    </div>


                    <div class="form-group col-lg-12">
                        <label>Email Address</label>
                        <input type="email" name="EmailAddress" class="form-control"required>
                    </div>

                    <div class="form-group col-lg-6">
                        <label>Cloud Coins</label>
                        <input type="file" name="CloudCoins" class="form-control"required>

                    </div>

                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>




            </div>
        </div>


    </section>
</div>
<div class="align-text-bottom text-center">
    <h3 class="dark-gray">If  you need help send a email to our support team at  CloudCoinSupport@protonmail.com</h3>

</div>
</body>
