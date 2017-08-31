@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Conocenos <small>Estamos atentos a tus inquietudes</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Ingresa nombre" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Ingresa tu email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Asunto</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Elije uno:</option>
                                <option value="service">General</option>
                                <option value="suggestions">Sugerencias</option>
                                <option value="product">Soporte de plataforma</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Enviar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Sitio en que nos encuentras</legend>
            <address>
                <strong>Colacteos</strong><br>
                Cra 36 No. 13-26 Av. Panamericana, <br>
                Pasto - Nariño - Colombia<br>
                <abbr title="Teléfono">
                    T:</abbr>
                +57 (2) 7333777 - +57 (2) 7228822 Ext. 2181-2191
            </address>
            <address>
                <strong>email</strong><br>
                <a href="mailto:correo@colacteos.com">correo@colacteos.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

@endsection