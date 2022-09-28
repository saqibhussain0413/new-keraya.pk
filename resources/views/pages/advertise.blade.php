<!DOCTYPE html>
<html lang="en">


<!-- form-wizard.html  21 Nov 2019 03:55:16 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>

<body>
<div class="loader"></div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4>Advertise your properties here</h4>
            </div>
            <div class="card-body">
                <form id="wizard_with_validation" method="POST">
                    <h3>Property Details</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Username*</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Password*</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Confirm Password*</label>
                                <input type="password" class="form-control" name="confirm" required>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Profile Information</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">First Name*</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Last Name*</label>
                                <input type="text" name="surname" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Email*</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Address*</label>
                                <textarea name="address" cols="30" rows="3" class="form-control no-resize"
                                          required></textarea>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Age*</label>
                                <input min="18" type="number" name="age" class="form-control" required>
                            </div>
                            <div class="help-info">The warning step will show up if age is less than 18</div>
                        </div>
                    </fieldset>
                    <h3>Terms &amp; Conditions - Finish</h3>
                    <fieldset>
                        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                        <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-validation/jquery.validate.js')}}"></script>
<!-- JS Libraies -->
<script src="{{asset('backend/plugins/jquery-steps/jquery.steps.css')}}"></script>
<!-- Page Specific JS File -->
<script src="{{asset('js/form-wizard.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{asset('js/custom.js')}}"></script>
<!-- General JS Scripts -->
</body>


<!-- form-wizard.html  21 Nov 2019 03:55:20 GMT -->
</html>