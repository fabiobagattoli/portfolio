*/@extends('layouts.main')

@section('title', 'Projetos')

@section('content')

<div id="top-content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="main-slider">
                    <div class="slide domainsearch-slide">
                        <div class="big-title">Projetos de <br> estudo</div>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="arrow-button-holder">
                    <a href="#pricing">
                        <div class="arrow-icon">
                            <i class="htfy htfy-arrow-down"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="articles" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="article-summary">
                    <div class="article-img"><img src="assets/images/emdesenvolvimento.jpg" alt="" /></div>
                    <div class="article-title"><a href="https://github.com/fabiobagattoli/marketplace_laravel.git" target="_blank">Marketplace</a></div>
                    <div class="article-text">Marketplace desenvolvido com Laravel. (Em desenvolvimento)
                    </div>
                    <div class="article-links row">
                        <div class="col-xs-6">
                            <div class="date-holder">
                                Data de início: 25/01/2023
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="readmore-holder">
                                <a href="https://github.com/fabiobagattoli/marketplace_laravel.git" target="_blank" class="ybtn ybtn-small ybtn-accent-color-text">Ver no GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>  
    </div>
</div>

@endsection