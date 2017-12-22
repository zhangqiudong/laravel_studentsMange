@extends('layouts.default')

@section('title')
    欢迎 -- {{ Auth::user()->name }}
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="home"><button class="btn btn-info">个人信息</button></a>
                        @include('stu.grades')
                    </div>

                    <div class="panel-body">
                        <div class="personal-mes">
                            学号: {{ Auth::user()->id }}
                            <br />
                            姓名: {{ Auth::user()->name }}
                            <br />
                            性别: {{ Auth::user()->sex }}
                            <br />
                            手机: {{ Auth::user()->phone }}
                            <br />
                            班级: {{ Auth::user()->pro_class }}
                            <br />
                            邮箱: {{ Auth::user()->email }}
                            <hr />
                            <a href="edit"><button class="btn btn-primary">修改资料</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop