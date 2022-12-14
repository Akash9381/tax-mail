<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="logo">
            <a href="{{url('/')}}">
                <h3><img class="tax-logo" src="{{asset('frontend/assets/img/tax-mall.png')}}"></h3>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">

            </ul>
            @role('admin')
            <div class="others-option" style="margin-right: 20px;">
                <div class="d-flex align-items-center">
                    <div class="option-item">
                        <a href="{{route('logout')}}" class="default-btn text-white mr-2" style="background-color: red">
                            Log-Out
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            @elserole('user')
            <div class="others-option" style="margin-right: 20px;">
                <div class="d-flex align-items-center">
                    <div class="option-item">
                        <a href="{{route('user.logout')}}" class="default-btn text-white mr-2" style="background-color: red">
                            Log-Out
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            @else
            <div class="others-option" style="margin-right: 20px;">
                <div class="d-flex align-items-center">
                    <div class="option-item">
                        <a href="{{route('user.login')}}" class="default-btn text-white mr-2" style="background-color: green">
                            Log-in
                            <span></span>
                        </a>

                    </div>
                </div>
            </div>
            @endrole
            @role('user')
            <div class="others-option">
                <div class="d-flex align-items-center">
                    <div class="option-item">
                        <a href="{{url('/dashboard')}}" class="default-btn text-white">
                            Dashbord
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            @endrole
            @role('admin')
            <div class="others-option">
                <div class="d-flex align-items-center">
                    <div class="option-item">
                        <a href="{{route('dashboard')}}" class="default-btn text-white">
                            Dashbord
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            @endrole
        </div>
    </div>
</nav>
