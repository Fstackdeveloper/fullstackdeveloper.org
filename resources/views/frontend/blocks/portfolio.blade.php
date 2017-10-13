 <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Portfolio</h2>
        <hr class="star-primary">
        <div class="row">
            
             @foreach ($Projects as $Project)

          <div class="col-sm-4 portfolio-item">
            <div class="portfolio-link" href="#portfolioModal{{$Project->id}}" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ Croppa::url('storage/thumbnails/'.$Project->image, 900, 560) }}" alt="">
            </div>
          </div>
          
              @endforeach

        </div>
        @if ($Pagination)
                 <div class="row">
 		  <div class="col-sm-12 mx-auto text-center">
<nav aria-label="Portfollio Pagination">

        
				{!! $Projects->render() !!}
                
			  </nav>               
                
                 </div>
		  </div>

        
        @else
         <div class="row">
 		  <div class="col-lg-8 mx-auto text-center">
            <a href="{{ route('frontend.portfolio') }}" class="btn btn-lg btn-primary">
              <i class="fa fa-file-image-o"></i>
              More
            </a>
          </div>
		  </div>
      @endif

      </div>
    </section>