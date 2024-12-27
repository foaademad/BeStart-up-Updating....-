@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/business_plan.css') }}" />
    <style>
        /* General Styling */
        .input-field, .textarea-field, select {
            width: 100%;

            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .mt-10 {

        }

        .mt-30 {
            margin-top: 30px;
        }

        .input-group {
            margin-bottom: 10px;
        }

        textarea {
            height:50px;
            max-height: 90px;
        }

        .container {
            display: block;
            position: relative;
            padding-left: 25px;
            /*margin-bottom: 12px;*/
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            border-radius:3px;
            position: absolute;
            top: 1px;
            left: 0;
            height: 15px;
            width: 16px;
            /*background-color: #eee;*/
            border: 1px solid #eee;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
            /*background-color: #ccc;*/
        }

        /* When the checkbox is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #5f55ad;
            border: 1px solid #5f55ad;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container .checkmark:after {
            left: 5px;
            top: 1px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .options_container{
            display:flex;
            flex-direction:row;
            justify-content:space-between;
        }
        .options_container .input-group{
            margin-right:10px;
        }
        .input_container{
            display:flex;
            flex-direction:row;
        }
        .input_container div{
            width:100%;
        }
        .input_container div:first-child{
            margin-right:10px;
        }
        .input_container div:last-child{
            margin-left:10px;
        }
        @media (max-width: 991px){
            .options_container{
                flex-direction:column;
            }
            .input_container{
                flex-direction:column;
            }

        }
        input[type=text],textarea,input[type=number]{
            width:100%;
            margin: 8px 0;
        }
        h3{
            font-size:25px !important;
        }
        textarea {
            color: var(--Color-Text-sideBar-text-color);

        }
        select{
            margin-bottom:8px;
        }


        .bodyofresult {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }

        .bodyofresult .btn-loading {
            display: flex;
            justify-content: center;
            align-items: center;
            gap:5px;
            width: 400px;
            padding: 10px 20px;
            background-color: var(--backColor-Base-sidebar-base);
            border-radius:8px;
        }

        .bodyofresult .btn-loading span {
            display:block;
            background: linear-gradient(to left, #6cd6ee, #9a4efb, #6C63FF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 20px;
            font-weight:600;
        }

        /* تأثير النقطة المتحركة */
         .dot {
            animation: blink 1s infinite;
            margin-left: 5px;
            font-size: 24px;
            color: #6e00ff;
        }

        @keyframes blink {
            0%, 100% {
                opacity: 0.3;
            }
            50% {
                opacity: 1;
            }
        }
    </style>
@endpush

@section('med_title', 'Make a business plan')

@section('content')


    <div class="box-content">
        @include('parts.med_screen')

        <section class="containerofbusiness-planer" style='margin-top:10px'>
            <div id='loading' style="display:none; margin-top:160px ; " class="bodyofresult">
                <div class="btn-loading" style='margin:0 auto 10px;'>
                    <span> Generating Content  </span>
                    <span class="dot">••</span>
                </div>
                <p>Tip: you can use AI generating tools to
                    help generate custom content
                    <br>
                    you can find it in the sidebar under AI tools</p>
            </div>

            <form id="business-plan-form">
                <div class="steps-wrapper mb-4">
                    <div class="steps">
                        <div class="step-wrapper">
                            <span class="step active">1</span>
                            <span class="step-title">Business Plan Objective</span>
                        </div>
                        <div class="step-wrapper">
                            <span class="step">2</span>
                            <span class="step-title">Basic Business Information</span>
                        </div>
                        <div class="step-wrapper">
                            <span class="step">3</span>
                            <span class="step-title"> Customer Group Details</span>
                        </div>
                        <div class="step-wrapper">
                            <span class="step">4</span>
                            <span class="step-title">Product or Service Details</span>
                        </div>
                        <div class="step-wrapper">
                            <span class="step">5</span>
                            <span class="step-title">Points of strength and weakness</span>
                        </div>
                        <div class="progress-bar">
                            <span class="progress" ></span>
                        </div>
                    </div>
                </div>
                <div id="form-content">

                    <!-- Step 1 -->
                    <div class="form-group section active">
                        <h3>Select Business Plan Objective</h3>
                        <label>Is this an existing or an upcoming business? <span> <span>*</span></span></label>
                        <div class="input-group">
                            <input type="radio" id="existing-business" name="business-type" value="Existing business">
                            <label for="existing-business">Existing business</label>
                        </div>
                        <div class="input-group ">
                            <input type="radio" id="upcoming-business" name="business-type" value="upcoming unlaunched business">
                            <label for="upcoming-business">Upcoming unlaunched business</label>
                        </div>
                        <span class="error-message" id="business-type-error"></span>


                        <label style ="margin-top: 30px">What will you use this business plan for?  <span>*</span></label>
                        <div class="input-group">
                            <input type="radio" id="request-investors" name="business-plan" value="request fund from investors">
                            <label for="request-investors">request fund from investors</label>
                        </div>
                        <div class="input-group">
                            <input type="radio" id="request-banks" name="business-plan" value="request fund from banks">
                            <label for="request-banks">request fund from banks</label>
                        </div>
                        <div class="input-group">
                            <input type="radio" id="reference-project" name="business-plan" value="reference for workplace project">
                            <label for="reference-project">reference for workplace project</label>
                        </div>
                        <div class="input-group">
                            <input type="radio" id="Other-reasons" name="business-plan" value="Other reasons">
                            <label for="Other-reasons">Other reasons</label>
                        </div>

                        <span class="error-message" id="business-plan-error"></span>
                    </div>

                    <!-- Step 2 -->
                    <div class="form-group section">
                            <h3>Enter Basic Business Information </h3>

                        <div class='input_container'>
                            <div>
                                <label for="business-name" >Business name <span>*</span></label>
                                <input name="business-name" style= " width: 100%; " type="text" id="business-name" placeholder="Business name" value='Learnify'>
                                <span class="error-message" id="business-name-error"></span>
                            </div>

                            <div>
                                <label for="value-startup" >Core value proposition of your startup <span>*</span></label>
                                <input name='startup-core-value' style = "width: 100%; " type="text" id="value-startup" placeholder="Core value proposition" value='Providing innovative solutions'>
                                <span class="error-message" id="value-startup-error"></span>
                            </div>

                            <div>
                                <label  for = "number-employees">Number of employees <span>*</span></label>
                                <input name="number-employees" style = " width: 100%; " type="number" id="number-employees" placeholder="insert number" min='1' value='1'>
                                <span class="error-message" id="number-employees-error"></span>
                            </div>
                        </div>

                        <label style ="margin-top: 8px" for = "business-description">Business description  <span>*</span></label>
                        <textarea name="business-description" style = "width: 100%;  " id="business-description" placeholder="tell us more about your business" >A software development company specializing in AI-driven tools for enterprises.</textarea>
                        <span class="error-message" id="business-description-error"></span>



                        <label style ="margin-top: 8px">Do you offer a product or service?  <span>*</span></label>
                        <div class='options_container'>
                            <div class="input-group">
                                <input type="radio" id="Product" name="type-service" value="Product" >
                                <label for="Product">Product</label>
                            </div>
                            <div class="input-group">
                                <input type="radio" id="Service" name="type-service" value="Service" >
                                <label for="Service">Service </label>
                            </div>
                        </div>
                        <span class="error-message" id="type-service-error"></span>

                        <label style ="margin-top: 8px">How can customers get your product or service?  <span>*</span></label>
                        <div class='options_container'>
                            <div class="input-group">
                                <input type="radio" id="Online" name="Availability" value="Online">
                                <label for="Online">Online</label>
                            </div>
                            <div class="input-group">
                                <input type="radio" id="Physical-Location" name="Availability" value="Physical Location" >
                                <label for="Physical-Location">Physical Location</label>
                            </div>
                            <div class="input-group">
                                <input type="radio" id="Both" name="Availability" value="online and Physical Location" >
                                <label for="Both">Both</label>
                            </div>
                        </div>
                        <span class="error-message" id="type-customer-error"></span>

                    </div>

                    <!-- Step 3 -->
                    <div class="form-group section">
                        <h3>Enter Customer Group Details </h3>
                        <label for="customers-location" >Where do you serve your customers?  <span>*</span></label>
                        <select name="business-location" class="mt-2" id="business-location">
                            <option selected>Select your business location </option>
                            <option value="local">Local</option>
                            <option value="regional">Regional</option>
                            <option value="national">National</option>
                            <option value="international">International</option>
                        </select>

                        <label style="margin-top: 8px" for="customer-description">Customer Group Description  <span>*</span></label>
                        <textarea id="customer-description" name="customer_description" style = "width: 100%;  " placeholder="Tell us more about your customers" >Serving customers across the country with tech solutions tailored to business needs.</textarea>

                        <label style="margin-top: 8px">Customer Group Income Level  <span>*</span></label>
                        <div class="input-group">
                            <label class="container">Low-income
                                <input type="checkbox" id="Low-income" name="customer_income_level[]" value="Low-income">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="input-group">
                            <label class="container">Medium-income
                                <input type="checkbox" id="Low-income" name="customer_income_level[]" value="Medium-income">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="input-group">
                            <label class="container">High-income
                                <input type="checkbox" id="Low-income" name="customer_income_level[]" value="High-income">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <span class="error-message" id="income-level-error"></span>
                    </div>

                    <!-- Step 4 -->
                    <div class="form-group section">
                        <h3>Enter Product or Service Details </h3>

                        <h3 >Product or Service 1  </h3>

                        <label style ="margin-top: 8px " for = "Product-Service-name ">Product or Service 1 Name  <span>*</span></label>
                        <input style = " width: 100%; " type="text" id="Product-Service-name" name='Product-Service-name' placeholder="Product name" value='AI Business Optimizer'>

                        <label for="Product-service-description" >Product or Service 1 Description  <span>*</span></label>
                        <textarea name="Product-service-description" id="Product-service-description" placeholder='Product or Service Description'>An AI-driven software solution that helps businesses optimize operations and improve efficiency.</textarea>


                        <h3 >Product or Service 2 </h3>

                        <label style ="margin-top: 8px" for = "Business-name">Product or Service 2 Name </label>
                        <input style = " width: 100%; " type="text" id="Business-name" name='Business-name' placeholder="Service name" >

                        <label for="Product-service-description2" >Product or Service 2 Description </label>
                        <textarea name="Product-service-description2" id="Product-service-description" placeholder='Product or Service Description' value='An AI-driven software solution that helps businesses optimize operations and improve efficiency.'></textarea>


                    </div>

                    <!-- Step 5 -->
                    <div class="form-group section ">
                        <h3>Enter Points of strength and weakness</h3>

                        <h3>Strength points  </h3>

                        <label style ="margin-top: 8px " for = "success-driver">Success Driver  <span>*</span></label>
                        <textarea style='height:120px;max-height:120px' name="strength-points" id="success-driver" placeholder='Success Drivers' >Innovative products, strong customer support, experienced development team.</textarea>


                        <h3>Weaknesses points  </h3>

                        <label style ="margin-top: 8px" for = "weaknesses-point">Weaknesses point <span> <span>*</span></span></label>
                        <textarea style='height:120px;max-height:120px' name="weaknesses-points" id="weaknesses-point" placeholder='Weaknesses Points' >Limited market penetration, high dependency on technology partners.</textarea>

                    </div>

                    <div class="buttons">
                        <button class="btn btn-prev" id="btn-prev" disabled>Previous</button>
                        <button type="submit" class="btn btn-next" id="btn-next">Next</button>
                    </div>
                </div>


            </form>
        </section>
    </div>


@endsection

@push('scripts')
    <script src="{{ asset('assets/js/dashboard/business_plan.js') }}"></script>

@endpush
