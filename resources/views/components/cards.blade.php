@props(['icon' => 'ion ion-person'])
<div class="col-12 col-md-3">
    <div {{ $attributes->merge([
        'class' => 'small-box',
    ]) }}>
        <div class="inner">
            <h3>{{$count}}</h3>

            <p>{{$title}}</p>
        </div>
        <div class="icon">
            <i class="{{ $icon }}"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class='fas fa-arrow-circle-right'></i></a>
    </div>
</div>
