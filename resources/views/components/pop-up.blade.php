<div class="clickcard" id="card{{$id}}">
    <div class="cardinterna" id="cardint{{$id}}" style="">
        <img src="img/{{$imagen}}" alt="">
        <x-cerrarbtn><x-slot name="id">b{{$id}}</x-slot></x-cerrarbtn>
        <a href="{{$url}}" id="btnmore">Ver mas</a>
    </div>
</div>

<style>
    #cardint{{$id}}{
        /* background: url('img/{{$imagen}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;*/
        height: 80vh;
    }
    #cardint{{$id}} img{
        width: 100%;
        object-fit: cover;
        object-position: center;
    }
</style>