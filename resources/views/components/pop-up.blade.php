<div class="clickcard" id="card{{$id}}">
    <div class="cardinterna" id="cardint{{$id}}" style="background-size: cover;background: url('img/{{$imagen}}');background-repeat: no-repeat;background-size: cover;background-position: center;">
        <x-cerrarbtn><x-slot name="id">b{{$id}}</x-slot></x-cerrarbtn>
        <a href="{{$url}}" id="btnmore">Ver mas</a>
    </div>
</div>