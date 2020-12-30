@extends('template.template')

@section('content')
<div class="mt-5 pt-5">
    <div class="container">
        <div class="mb-5">
            <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: 50%;">
                <div class="card-body text-center">
                    <h2>Sujet : {{$show->sujet}}</h2>
                    <h5>Question : {{$show->question}}</h5>
                    <form action="/store-reponse/{{$show->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Message : </label>
                            <textarea name="reponse" rows="5">
                            </textarea>
                            <input type="text" value="{{Auth::user()->id}}" name="numero" class="d-none">
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Envoyer le Message</button>
                    </form>
                    <div class="container-fluid mt-100">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <div class="media flex-wrap w-100 align-items-center"> <img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg"
                                                class="d-block ui-w-40 rounded-circle" alt="">
                                            <div class="media-body ml-3"> <a href="javascript:void(0)"
                                                    data-abc="true">{{Auth::user()->name}}</a>
                                                <div class="text-muted small">13 days ago</div>
                                            </div>
                                            <div class="text-muted small ml-3">
                                                <div><strong>{{Auth::user()->created_at}}</strong></div>
                                                <div><strong>134</strong> posts</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>{{$reponse->reponse}}</p>
                                    </div>
                                    <div
                                        class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                                        <div class="px-4 pt-3"> <a href="javascript:void(0)"
                                                class="text-muted d-inline-flex align-items-center align-middle"
                                                data-abc="true"> <i class="fa fa-heart text-danger"></i>&nbsp; <span
                                                    class="align-middle">445</span> </a> <span
                                                class="text-muted d-inline-flex align-items-center align-middle ml-4">
                                                <i class="fa fa-eye text-muted fsize-3"></i>&nbsp; <span
                                                    class="align-middle">14532</span> </span> </div>
                                        <div class="px-4 pt-3"> <button type="button" class="btn btn-primary"><i
                                                    class="ion ion-md-create"></i>&nbsp; Reply</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop