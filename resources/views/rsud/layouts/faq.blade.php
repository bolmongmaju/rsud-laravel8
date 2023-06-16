<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <div class="section-title">
                <h2>FAQ</h2>
                <div class="divider mx-auto my-4"></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="accordion-section">
            <div class="accordion-holder">
                <div class="accordion accordion-flush" id="accordionGroup" role="tablist" aria-multiselectable="true">
                    @forelse ($faq as $item)
                    <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h4 class="card-title">
                        <a role="button" data-toggle="collapse" href="#faq{{ $item->id }}" aria-expanded="true" aria-controls="collapseOne">
                            {!! strip_tags($item->question) !!}
                        </a>
                        </h4>
                    </div>
                    <div id="faq{{ $item->id }}" class="collapse {{ ($item->id == $faq_show_default->id) ? 'show' : '' }}" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">
                        <div class="card-body">
                            {!! strip_tags($item->answer) !!}
                        </div>
                    </div>
                    </div>
                    @empty
                    <span></span>
                    @endforelse
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
