@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/settings.css') }}" />
@endpush

@section('med_title', 'Settings')

@section('content')

    <div class="box-content">
        @include('parts.med_screen')

        <div class="containerofprofile">
            <div class="profile-sidebar">
                <div class="profile-card">
                    <div class="profile-avatar"></div>
                    <h3>{{ $user['name'] }}</h3>
                    <p>Happy Person</p>
                    <div class="profile-stats">
                        <p><strong>1000</strong> Words Left</p>
                        <p><strong>1000</strong> Images Left</p>
                        <p><strong>1000</strong> Characters Left</p>
                        <p><strong>10</strong> Minutes Left</p>
                    </div>
                    <div class='split'></div>
                    <ul class="profile-links">
                        <li><a href="#" class="active"><i class="fa fa-user-shield mr-1"></i> View Profile</a></li>
                        <li><a href="#" ><i class="fa-solid fa-lock mr-1"></i> Change Password</a></li>
                        <li><a href="#"><i class="fa-solid fa-user-xmark mr-1"></i> Delete Account</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-content">

                <div class="View-profile section active">
                    <h3>View Profile</h3>
                    <form id="information-form">
                        <label for="name">Full Name </label>
                        <input name="name" type="text" id="name" placeholder="Enter your full name" value='{{ $user['name'] }}'>
                        <span class="error-message" id="name-error"></span>

                        <label for="email">Email Address</label>
                        <input name="email" type="email" id="email" placeholder="Enter your email" value='{{ $user['email'] }}'>
                        <span class="error-message" id="email-error"></span>

                        <label for="phone">Phone Number</label>
                        <input name="phone_number" type="text" id="phone" placeholder="Enter your phone" value='{{ $user['phone_number'] }}'>
                        <span class="error-message" id="phone-error"></span>

                        <label for="country">Referral Link</label>
                        <input name="country" type="text" id="country" placeholder="Country" value='{{ $user['country'] }}'>
                        <span class="error-message" id="referral-error"></span>

                        <div class="form-actions">
                            <button type="submit" class="change-btn">Update</button>
                        </div>
                    </form>
                </div>

                <div class="change-password section ">
                    <h3> Change Password</h3>
                    <form id="change-password">
                        <div class="password">
                            <label for="current-password">Current Password</label>
                            <div class="input-filled-new">
                                <input
                                    type="password"
                                    name="current_password"
                                    id="current-password"
                                    class="text-wrapper-4"
                                    placeholder="Enter your current password"
                                />
                                <span class="toggle-icon">
                              <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Layer 2">
                                      <g id="eye">
                                          <path id="Vector" d="M21.8699 11.6449C21.2299 10.5349 17.7099 4.96489 11.7299 5.14489C6.19995 5.28489 2.99995 10.1449 2.12995 11.6449C2.04218 11.7969 1.99597 11.9694 1.99597 12.1449C1.99597 12.3204 2.04218 12.4929 2.12995 12.6449C2.75995 13.7349 6.12995 19.1449 12.0199 19.1449H12.2699C17.7999 19.0049 21.0099 14.1449 21.8699 12.6449C21.9577 12.4929 22.0039 12.3204 22.0039 12.1449C22.0039 11.9694 21.9577 11.7969 21.8699 11.6449ZM12.2199 17.1449C7.90995 17.2449 5.09995 13.5549 4.21995 12.1449C5.21995 10.5349 7.82995 7.24489 11.8299 7.14489C16.1199 7.03489 18.9399 10.7349 19.8299 12.1449C18.7999 13.7549 16.2199 17.0449 12.2199 17.1449Z" fill="#E3E3E3"/>
                                          <path id="Vector_2" d="M12 8.64844C11.3078 8.64844 10.6311 8.85371 10.0555 9.23829C9.47993 9.62288 9.03133 10.1695 8.76642 10.809C8.50152 11.4486 8.4322 12.1523 8.56725 12.8313C8.7023 13.5102 9.03564 14.1338 9.52513 14.6233C10.0146 15.1128 10.6383 15.4461 11.3172 15.5812C11.9961 15.7162 12.6999 15.6469 13.3394 15.382C13.9789 15.1171 14.5256 14.6685 14.9101 14.0929C15.2947 13.5174 15.5 12.8407 15.5 12.1484C15.5 11.2202 15.1313 10.3299 14.4749 9.67356C13.8185 9.01719 12.9283 8.64844 12 8.64844ZM12 13.6484C11.7033 13.6484 11.4133 13.5605 11.1666 13.3956C10.92 13.2308 10.7277 12.9966 10.6142 12.7225C10.5007 12.4484 10.4709 12.1468 10.5288 11.8558C10.5867 11.5648 10.7296 11.2976 10.9393 11.0878C11.1491 10.878 11.4164 10.7351 11.7074 10.6773C11.9983 10.6194 12.2999 10.6491 12.574 10.7626C12.8481 10.8761 13.0824 11.0684 13.2472 11.3151C13.412 11.5618 13.5 11.8518 13.5 12.1484C13.5 12.5463 13.342 12.9278 13.0607 13.2091C12.7794 13.4904 12.3978 13.6484 12 13.6484Z" fill="#E3E3E3"/>
                                      </g>
                                  </g>
                              </svg>
                          </span>
                            </div>
                            <span id="current-password-error" class="error-message"></span>
                        </div>

                        <div class="password">
                            <label for="new-password">New Password</label>
                            <div class="input-filled-new">
                                <input
                                    type="password"
                                    id="new-password"
                                    name="new-password"
                                    class="text-wrapper-4"
                                    placeholder="Enter your new password"
                                />
                                <span class="toggle-icon">
                              <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Layer 2">
                                      <g id="eye">
                                          <path id="Vector" d="M21.8699 11.6449C21.2299 10.5349 17.7099 4.96489 11.7299 5.14489C6.19995 5.28489 2.99995 10.1449 2.12995 11.6449C2.04218 11.7969 1.99597 11.9694 1.99597 12.1449C1.99597 12.3204 2.04218 12.4929 2.12995 12.6449C2.75995 13.7349 6.12995 19.1449 12.0199 19.1449H12.2699C17.7999 19.0049 21.0099 14.1449 21.8699 12.6449C21.9577 12.4929 22.0039 12.3204 22.0039 12.1449C22.0039 11.9694 21.9577 11.7969 21.8699 11.6449ZM12.2199 17.1449C7.90995 17.2449 5.09995 13.5549 4.21995 12.1449C5.21995 10.5349 7.82995 7.24489 11.8299 7.14489C16.1199 7.03489 18.9399 10.7349 19.8299 12.1449C18.7999 13.7549 16.2199 17.0449 12.2199 17.1449Z" fill="#E3E3E3"/>
                                          <path id="Vector_2" d="M12 8.64844C11.3078 8.64844 10.6311 8.85371 10.0555 9.23829C9.47993 9.62288 9.03133 10.1695 8.76642 10.809C8.50152 11.4486 8.4322 12.1523 8.56725 12.8313C8.7023 13.5102 9.03564 14.1338 9.52513 14.6233C10.0146 15.1128 10.6383 15.4461 11.3172 15.5812C11.9961 15.7162 12.6999 15.6469 13.3394 15.382C13.9789 15.1171 14.5256 14.6685 14.9101 14.0929C15.2947 13.5174 15.5 12.8407 15.5 12.1484C15.5 11.2202 15.1313 10.3299 14.4749 9.67356C13.8185 9.01719 12.9283 8.64844 12 8.64844ZM12 13.6484C11.7033 13.6484 11.4133 13.5605 11.1666 13.3956C10.92 13.2308 10.7277 12.9966 10.6142 12.7225C10.5007 12.4484 10.4709 12.1468 10.5288 11.8558C10.5867 11.5648 10.7296 11.2976 10.9393 11.0878C11.1491 10.878 11.4164 10.7351 11.7074 10.6773C11.9983 10.6194 12.2999 10.6491 12.574 10.7626C12.8481 10.8761 13.0824 11.0684 13.2472 11.3151C13.412 11.5618 13.5 11.8518 13.5 12.1484C13.5 12.5463 13.342 12.9278 13.0607 13.2091C12.7794 13.4904 12.3978 13.6484 12 13.6484Z" fill="#E3E3E3"/>
                                      </g>
                                  </g>
                              </svg>
                          </span>
                            </div>
                            <span id="new-password-error" class="error-message"></span>
                        </div>

                        <div class="password">
                            <label for="confirm-password">Confirm New Password</label>
                            <div class="input-filled-new">
                                <input
                                    type="password"
                                    id="confirm-password"
                                    class="text-wrapper-4"
                                    name='new_password_confirmation'
                                    placeholder="Re-enter your new password"
                                />
                                <span class="toggle-icon">
                              <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Layer 2">
                                      <g id="eye">
                                          <path id="Vector" d="M21.8699 11.6449C21.2299 10.5349 17.7099 4.96489 11.7299 5.14489C6.19995 5.28489 2.99995 10.1449 2.12995 11.6449C2.04218 11.7969 1.99597 11.9694 1.99597 12.1449C1.99597 12.3204 2.04218 12.4929 2.12995 12.6449C2.75995 13.7349 6.12995 19.1449 12.0199 19.1449H12.2699C17.7999 19.0049 21.0099 14.1449 21.8699 12.6449C21.9577 12.4929 22.0039 12.3204 22.0039 12.1449C22.0039 11.9694 21.9577 11.7969 21.8699 11.6449ZM12.2199 17.1449C7.90995 17.2449 5.09995 13.5549 4.21995 12.1449C5.21995 10.5349 7.82995 7.24489 11.8299 7.14489C16.1199 7.03489 18.9399 10.7349 19.8299 12.1449C18.7999 13.7549 16.2199 17.0449 12.2199 17.1449Z" fill="#E3E3E3"/>
                                          <path id="Vector_2" d="M12 8.64844C11.3078 8.64844 10.6311 8.85371 10.0555 9.23829C9.47993 9.62288 9.03133 10.1695 8.76642 10.809C8.50152 11.4486 8.4322 12.1523 8.56725 12.8313C8.7023 13.5102 9.03564 14.1338 9.52513 14.6233C10.0146 15.1128 10.6383 15.4461 11.3172 15.5812C11.9961 15.7162 12.6999 15.6469 13.3394 15.382C13.9789 15.1171 14.5256 14.6685 14.9101 14.0929C15.2947 13.5174 15.5 12.8407 15.5 12.1484C15.5 11.2202 15.1313 10.3299 14.4749 9.67356C13.8185 9.01719 12.9283 8.64844 12 8.64844ZM12 13.6484C11.7033 13.6484 11.4133 13.5605 11.1666 13.3956C10.92 13.2308 10.7277 12.9966 10.6142 12.7225C10.5007 12.4484 10.4709 12.1468 10.5288 11.8558C10.5867 11.5648 10.7296 11.2976 10.9393 11.0878C11.1491 10.878 11.4164 10.7351 11.7074 10.6773C11.9983 10.6194 12.2999 10.6491 12.574 10.7626C12.8481 10.8761 13.0824 11.0684 13.2472 11.3151C13.412 11.5618 13.5 11.8518 13.5 12.1484C13.5 12.5463 13.342 12.9278 13.0607 13.2091C12.7794 13.4904 12.3978 13.6484 12 13.6484Z" fill="#E3E3E3"/>
                                      </g>
                                  </g>
                              </svg>
                          </span>
                            </div>
                            <span id="confirm-password-error" class="error-message"></span>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="change-btn">Change</button>
                        </div>
                    </form>
                </div>

                <div class="delete-account section">
                    <h3>Delete Account</h3>
                    <form>
                        <p><span>Warning!</span>
                            This will fully delete all your account details, generated results and you will not be able to recover your account afterwards
                        </p>
                        <div style='display:flex;align-items:center;justify-content:flex-start; margin-top:10px;'>
                            <input type="checkbox" id="confirm" style='width:2%;margin-right:5px;' >
                            <label for="confirm" style='padding:0;margin:0;'>I confirm that I would like to completely delete by account on this platform</label>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="change-btn">Yes, Delete My Account </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection


@push('scripts')
    <script src='{{ asset('assets/js/dashboard/settings.js') }}'></script>
@endpush
