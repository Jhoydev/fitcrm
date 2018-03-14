@if(count($championships))
    <div class="row my-5">
        <div class="col-12">
            <h5 class="text-center"><i class="fa fa-trophy" aria-hidden="true"></i> Proximos campeonatos federados</h5>
            <div class="list-group">
                @foreach($championships as $championship)
                    <a href="{{ url("championships/$championship->id") }}" class="list-group-item list-group-item-action">{{ $championship->name }} - {{ $championship->date->toFormattedDateString() }}</a>
                @endforeach
            </div>

        </div>
    </div>
@endif
<div class="row my-5">
    <div class="col-12">
        <h5><i class="fa fa-phone" aria-hidden="true"></i> Contacto</h5>
        <form action="{{ url("/send/contact") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Tu correo electronico</label>
                <input type="email" class="form-control" name="fromemail" id="" aria-describedby="emailHelpId" placeholder="">
                <small id="emailHelpId" class="form-text text-muted">Help text</small>
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-send" aria-hidden="true"></i> Enviar</button>
            </div>
        </form>
    </div>
</div>
<div class="row my-5">
    <div class="col-12">
        <h5>Publicidad</h5>
        <img src="https://www.yamamotonutrition.com/imgblog/blog-head/a173.jpg" alt="" class="img-fluid my-2">
        <img src="http://www.fvff.es/wp-content/uploads/2014/08/logo-EMPRO-TEAM2.jpg" alt="" class="img-fluid my-2">
    </div>
</div>
