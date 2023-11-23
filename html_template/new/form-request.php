<!-- Header -->
<?php include "header.php" ?>

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Request Proof of Concept</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Request Proof of Concept</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== Tanmoy ======== -->
<section class="request">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form">
                    <h2>Request Proof of Concept</h2>
                    <form action="">
                        <div class="mb-3">
                            <label for="c-name" class="form-label">Company name</label>
                            <input type="text" class="form-control" id="c-name" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="contact-name" class="form-label">Contact name</label>
                            <input type="text" class="form-control" id="contact-name" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone number</label>
                            <input type="text" class="form-control" id="phone" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="
                            email" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="Address" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="vehicle-type " class="form-label">Vehicle Type</label>
                            <select class="form-select" aria-label="vehicle-type" id="vehicle-type">
                                <option selected>Select number range</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="make " class="form-label">Make</label>
                            <select class="form-select" aria-label="make" id="make">
                                <option selected>Select make</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Model" class="form-label">Model</label>
                            <input type="text" class="form-control" id="Model" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Year" class="form-label">Year</label>
                            <input type="text" class="form-control" id="Year" placeholder="">
                        </div>


                        <div class="mb-3">
                            <label for="company-address" class="form-label">Company Address</label>
                            <input type="text" class="form-control" id="company-address" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="street-no" class="form-label">Street no</label>
                            <input type="text" class="form-control" id="street-no" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="block-or-plot" class="form-label">Block or Plot</label>
                            <input type="text" class="form-control" id="block-or-plot" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="street-name" class="form-label">Street name</label>
                            <input type="text" class="form-control" id="street-name" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="additional" class="form-label">Additional Details</label>
                            <textarea class="form-control" id="additional" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-theme">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== Tanmoy END ======== -->


<!--- footer -->
<?php include "footer.php" ?>