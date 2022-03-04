<main>   
   <div class="container-fluid black_back">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between ">

                    @foreach($serie as $key => $element)
                        <div class="cards d-flex flex-column mt-5">
                            <div class="serie_image">
                                <img src="{{$element['thumb']}}" alt="" class="w-100">
                            </div>
                            <div class="subtit mt-3">{{ strtoupper($element['series']) }}</div>
                        </div>
                    @endforeach

                </div>
                <div class="col-12 text-center mt-5">LOAD MORE</div>
            </div>
        </div>
    </div> 
    <div class="container-fluid blu_back d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between">
                    @foreach($inf as $key => $value)
                    <div class="img_ass">
                        <img class="w-100 h-100" src="{{asset($value['img'])}}" alt="">
                    </div>
                    <div class="d-flex align-items-center">{{$value['title']}}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>    
</main>