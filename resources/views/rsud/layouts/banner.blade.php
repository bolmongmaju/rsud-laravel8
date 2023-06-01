{{-- <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-xl-7">
            <div class="block">
                <div class="divider mb-3"></div>
                <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                <div class="btn-container ">
                    <a href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i class="icofont-simple-right ml-2  "></i></a>
                </div>
            </div>
        </div>
    </div>
</div> --}}



    <div style="margin: 1%;">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
            @foreach ($sliders as $i => $slide)
              <div class="carousel-item @if($i===0) active @endif">
                <img class="d-block w-100" src="{{ $slide->image }}" alt="First slide" style="border-radius: 10px;">
              </div>
            @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    </div>
