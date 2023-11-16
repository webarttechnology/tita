@extends('front.layouts.app')
@section('content')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About  -->
<section class="aboutsec">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="aboutimg">
                    <img src="./assets/images/aboutimg.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <h2>About <span>TITA</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quo consequuntur recusandae
                        laborum, id saepe dolor enim, ex eius minima nemo fuga non ab odit ut facere inventore tempora?
                        Ex
                        minima eaque quis excepturi odit delectus dolore fugiat, facilis dolores, corporis itaque natus,
                        neque consectetur debitis ratione iste explicabo reiciendis consequatur unde? Consectetur sed ab
                        voluptates repellat. Cupiditate, similique sunt.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quaerat aspernatur laborum
                        perferendis deserunt beatae mollitia, iure libero harum eius!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet recusandae numquam dicta
                        odit
                        vitae ullam dolorem illo beatae? Obcaecati qui nam nulla dignissimos inventore nisi molestiae
                        beatae, deserunt optio unde veniam laborum quas odit ullam dolorum sapiente ducimus asperiores
                        voluptas praesentium! Dolorum neque a quas nemo id itaque enim!</p>
                </div>
            </div>
        </div>
        <div class="row what ">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <h4>We are</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur id molestias itaque iusto
                        voluptas autem impedit vero quas repellendus ea.</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <h4>We are Not</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur id molestias itaque iusto
                        voluptas autem impedit vero quas repellendus ea.</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <h4>What We Do</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur id molestias itaque iusto
                        voluptas autem impedit vero quas repellendus ea.</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About END -->
<!-- ======== Tanmoy END ======== -->


@endsection