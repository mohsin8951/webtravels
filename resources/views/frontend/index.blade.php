@extends('frontend.layouts.app')
@section('content')
<section id="slider1">
<div class="row">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{asset('img/lake.jpg')}}" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{asset('img/lake.jpg')}}" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{asset('img/lake.jpg')}}" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
</section>


<div class="container">

<section id="slider">
  <div class="row">
     <div class="col-md-4">
      <img src="{{asset('img/small.jpg')}}" class="user-image" alt="User Image" class="img-responsive">
      <div class="decs">
          <h2>Product 1</h2>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum recently with desktop publishing software like Aldus PageMaker including versions of Lo
      </div>
     </div>

     <div class="col-md-4">
      <img src="{{asset('img/small.jpg')}}" class="user-image" alt="User Image" class="img-responsive">
      <div class="decs">
          <h2>Product 2</h2>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum recently with desktop publishing software like Aldus PageMaker including versions of Lo
      </div>
     </div>

     <div class="col-md-4">
      <img src="{{asset('img/small.jpg')}}" class="user-image" alt="User Image" class="img-responsive">
      <div class="decs">
          <h2>Product 3</h2>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum recently with desktop publishing software like Aldus PageMaker including versions of Lo
      </div>
     </div>
  </div>
</section>


<section id="slider">
  <div class="row">
     <div class="col-md-4">
      <img src="{{asset('img/small.jpg')}}" class="user-image" alt="User Image" class="img-responsive">
      <div class="decs">
        <h2>Product 1</h2>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum recently with desktop publishing software like Aldus PageMaker including versions of Lo
      </div>
     </div>

     <div class="col-md-4">
      <img src="{{asset('img/small.jpg')}}" class="user-image" alt="User Image" class="img-responsive">
      <div class="decs">
        <h2>Product 2</h2>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum recently with desktop publishing software like Aldus PageMaker including versions of Lo
      </div>
     </div>

     <div class="col-md-4">
      <img src="{{asset('img/small.jpg')}}" class="user-image" alt="User Image" class="img-responsive">
      <div class="decs">
        <h2>Product 3</h2>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum recently with desktop publishing software like Aldus PageMaker including versions of Lo
      </div>
     </div>
  </div>
</section>



<section id="slider">
    <div class="row">
        <div class="col-md-4">
            <div class="post">
              <img src="{{asset('img/qabar.png')}}" class="user-image" alt="User Image" class="img-responsive">
            </div>
        </div>

                <div class="col-xs-8">
                    <div class="post">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo
                    </div>
                </div>

      </div><!--row-->
      </section>
    </div>

@endsection
