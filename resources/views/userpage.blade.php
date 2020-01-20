
@extends('layout')

@section('title','تماس با ما')
@section('content')
<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="rtl">خوش آمدید</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
شما با موفقیت وارد شدید!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



