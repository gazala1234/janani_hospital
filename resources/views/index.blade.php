@extends('layouts.app')

@section('page-heading')
Dashboard
@endsection

@section('page-content')
<section class="row">
    <div class="col-12 col-lg-9">
        <div class="dashboard">
            <div class="dashboard-img">
                <img src="{{ asset('../assets/compiled/jpg/hospital.jpg') }}" class="img-fluid" alt="Hospital">
            </div>
            <div class="dashboard-content text-center">
                <h4>Janani-Multispeciality Hospital</h4>
                <h6>Pregnancy and Baby Care Community to connect with others and share their experiences</h6>
            </div>
        </div>
        <div class="communities mt-5">
            <h1 class="text-center">Our Communities</h1>
            <div class="row mt-5">
                <div class="community-card">
                    <div class="card-content">
                        {{-- <img src="../img/community/janani-moms.jpeg" alt="Janani Moms" class="community-image">
                        --}}
                        <h3>Janani Moms</h3>
                        <p>Join a supportive community of mothers sharing experiences and advice.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Join Community</a>
                        </div>
                    </div>
                </div>
                <div class="community-card">
                    <div class="card-content">
                        {{-- <img src="../img/community/pregnancy-class.jpeg" alt="Pregnancy Classes"
                            class="community-image"> --}}
                        <h3>Pregnancy Classes</h3>
                        <p>Enroll in classes to learn about pregnancy, childbirth, and parenting.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="community-card">
                    <div class="card-content">
                        {{-- <img src="../img/community/pregnancy-package.jpeg" alt="Pregnancy Packages"
                            class="community-image"> --}}
                        <h3>Pregnancy Packages</h3>
                        <p>Explore our tailored packages for a healthy pregnancy journey.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Explore Packages</a>
                        </div>
                    </div>
                </div>
                <div class="community-card">
                    <div class="card-content">
                        {{-- <img src="../img/community/health-card.jpeg" alt="Janani Health Card"
                            class="community-image"> --}}
                        <h3>Janani Health Card</h3>
                        <p>Sign up for exclusive benefits and health services for mothers.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Enroll Today</a>
                        </div>
                    </div>
                </div>
                <div class="community-card">
                    <div class="card-content">
                        {{-- <img src="../img/community/blog.jpeg" alt="Blog" class="community-image"> --}}
                        <h3>Blog</h3>
                        <p>Read our insightful articles and personal stories on motherhood.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="community-card">
                    <div class="card-content">
                        {{-- <img src="../img/community/anc-calendar.jpeg" alt="ANC Calendar" class="community-image">
                        --}}
                        <h3>ANC Calendar</h3>
                        <p>A special package for a joyful birthing experience.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="{{ asset('../assets/compiled/jpeg/guest.jpeg') }}" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">John Duck</h5>
                        <h6 class="text-muted mb-0">@johnducky</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Recent Messages</h4>
            </div>
            <div class="card-content pb-4">
                <div class="recent-message d-flex px-4 py-3">
                    <div class="avatar avatar-lg">
                        <img src="{{ asset('../assets/compiled/jpg/4.jpg') }}">
                    </div>
                    <div class="name ms-4">
                        <h5 class="mb-1">Hank Schrader</h5>
                        <h6 class="text-muted mb-0">@johnducky</h6>
                    </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                    <div class="avatar avatar-lg">
                        <img src="{{ asset('../assets/compiled/jpg/5.jpg') }}">
                    </div>
                    <div class="name ms-4">
                        <h5 class="mb-1">Dean Winchester</h5>
                        <h6 class="text-muted mb-0">@imdean</h6>
                    </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                    <div class="avatar avatar-lg">
                        <img src="{{  asset('../assets/compiled/jpg/1.jpg') }}">
                    </div>
                    <div class="name ms-4">
                        <h5 class="mb-1">John Dodol</h5>
                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                    </div>
                </div>
                <div class="px-4">
                    <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Start
                        Conversation</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Visitors Profile</h4>
            </div>
            <div class="card-body">
                <div id="chart-visitors-profile"></div>
            </div>
        </div>
    </div>
</section>
@endsection