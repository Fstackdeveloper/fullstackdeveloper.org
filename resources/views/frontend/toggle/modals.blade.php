  <!-- Portfolio Modals -->
 @foreach ($Projects as $Project)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$Project->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2> {{ $Project->title }}</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="{{ Croppa::url('storage/thumbnails/'.$Project->image, 900, 560) }}" alt="">
                  <p>{!! html_entity_decode($Project->description) !!}</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                       {{ $clients[$Project->project_clients_id]->name }}

                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        {{ $Project->release_date }}
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        {{ $categories[$Project->project_categories_id]->title }}
                      </strong>
                    </li>
                    
                    
                    @isset($Project->url )

                    <li>
						<a href=" {{ $Project->url }}" target="_blank" class="btn btn-primary btn-lg btn-block">Click to Browse Project</a>

                    </li>
                    @endisset

                    
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endforeach

    
    