@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/cards.css') }}" />
@endpush

@section('content')


        <div class="box-content">
            <div class="med-screen">
                <h4 class="name">
                    <p style='margin-bottom:5px;'>Quick Access</p>
                    <div class="templates-choice">
                        <a href='{{ route('user.mentors') }}'>Presentation</a>
                        <a href='{{ route('user.mentors') }}'>Mentors</a>
                        <a href='{{ route('user.tools') }}'>Tools</a>
                        <a href='{{ route('user.templates') }}'>Templates</a>
                    </div>
                </h4>
            </div>
            <div class="content-cards">
                <div class="card log">
                    <h3>Log</h3>
                    <div class="credits">
                        <div>
                  <span>
                    <img src="{{ asset('assets/imgs/words.png') }}" alt="Contact Support">
                  </span>
                            <h4>100</h4>
                            <p>Words left</p>
                        </div>
                        <div>
                  <span>
                    <img src="{{ asset('assets/imgs/images.png') }}" alt="Contact Support">
                  </span>
                            <h4>10</h4>
                            <p>Images left</p>

                        </div>
                        <div>
                  <span>
                    <img src="{{ asset('assets/imgs/Empty Hourglass.png') }}" alt="Contact Support">
                  </span>
                            <h4>10</h4>
                            <p>Minutes left</p>
                        </div>
                    </div>
                </div>

                <!-- Cards Section -->
                <div class="cards">
                    <div class="card credits-box">
                        <h3>Credits</h3>
                        <div class="credits">
                            <div>
                      <span>
                        <img src="{{ asset('assets/imgs/words.png') }}" alt="Contact Support">
                      </span>
                                <h4>100</h4>
                                <p>Words left</p>
                            </div>
                            <div>
                      <span>
                        <img src="{{ asset('assets/imgs/images.png') }}" alt="Contact Support">
                      </span>
                                <h4>10</h4>
                                <p>Images left</p>

                            </div>
                            <div>
                      <span>
                        <img src="{{ asset('assets/imgs/Empty Hourglass.png') }}" alt="Contact Support">
                      </span>
                                <h4>10</h4>
                                <p>Minutes left</p>
                            </div>
                        </div>
                    </div>

                    <div class="card table" >
                        <h3>Recent Activity</h3>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Doc Name</th>
                                        <th>Owner</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Pitch Deck Presentation</td>
                                        <td>Hossam</td>
                                        <td>View</td>
                                    </tr>
                                    <tr>
                                        <td>Business Plan</td>
                                        <td>Nada</td>
                                        <td>View</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card templates">
                        <div class="heading">
                            <h3>Fav Templates</h3>
                            <button>view</button>
                        </div>
                        <p>
                            Your favorite templates will appear here once you mark them as
                            favorite.
                        </p>
{{--                        <div class="small-card d-flex">--}}
{{--                            <div class="mini-card p-3">--}}
{{--                                <span>--}}
{{--                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">--}}
{{--                                          <g id="fav">--}}
{{--                                          <path id="Vector" d="M8.38025 1.77281C8.5766 1.33229 8.67482 1.11203 8.81154 1.0442C8.93029 0.985267 9.06973 0.985267 9.18847 1.0442C9.3252 1.11203 9.42342 1.33229 9.61977 1.77281L11.1838 5.28163C11.2419 5.41186 11.2709 5.47697 11.3159 5.52684C11.3555 5.57096 11.4041 5.60625 11.4583 5.63041C11.5197 5.65772 11.5906 5.6652 11.7324 5.68016L15.5528 6.08339C16.0324 6.13401 16.2722 6.15932 16.379 6.26838C16.4717 6.36312 16.5148 6.49577 16.4955 6.62693C16.4732 6.77791 16.2941 6.93931 15.9358 7.26221L13.082 9.83403C12.9761 9.92945 12.9231 9.9772 12.8896 10.0353C12.8599 10.0868 12.8414 10.1439 12.8352 10.2029C12.8281 10.2697 12.8429 10.3394 12.8725 10.4789L13.6696 14.2369C13.7697 14.7087 13.8197 14.9446 13.749 15.0798C13.6875 15.1974 13.5747 15.2793 13.444 15.3014C13.2935 15.3269 13.0846 15.2064 12.6668 14.9655L9.33902 13.0461C9.21553 12.9748 9.15378 12.9393 9.08813 12.9253C9.03003 12.913 8.96998 12.913 8.91188 12.9253C8.84623 12.9393 8.78449 12.9748 8.66099 13.0461L5.33322 14.9655C4.91542 15.2064 4.70653 15.3269 4.55605 15.3014C4.42534 15.2793 4.3125 15.1974 4.25106 15.0798C4.18033 14.9446 4.23037 14.7087 4.33044 14.2369L5.12752 10.4789C5.1571 10.3394 5.17189 10.2697 5.16487 10.2029C5.15865 10.1439 5.1401 10.0868 5.11042 10.0353C5.07687 9.9772 5.02391 9.92945 4.918 9.83403L2.06423 7.26221C1.70596 6.93931 1.52681 6.77791 1.50454 6.62693C1.4852 6.49577 1.5283 6.36312 1.62104 6.26838C1.7278 6.15932 1.96762 6.13401 2.44727 6.08339L6.26767 5.68016C6.40947 5.6652 6.48036 5.65772 6.54166 5.63041C6.5959 5.60625 6.64447 5.57096 6.68421 5.52684C6.72913 5.47697 6.75815 5.41186 6.81621 5.28163L8.38025 1.77281Z" fill="#FFED4A" stroke="#FFED4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                          </g>--}}
{{--                                      </svg>--}}
{{--                                 </span>--}}
{{--                                <p>social Media <br />Template 1#</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    <div class="card mentors">
                        <div class="heading">
                            <h3>Fav Mentors</h3>
                            <button>view</button>
                        </div>
                        <p>
                            Your favorite mentors will appear here once you mark them as
                            favorite.
                        </p>

                    </div>

                    <div class="card favorite">
                        <div class="heading">
                            <h3>Fav Tools</h3>
                            <button>view</button>
                        </div>
                        <p>
                            Your favorite tools will appear here once you mark them as
                            favorite.
                        </p>
                    </div>

                </div>
            </div>
        </div>


@endsection
