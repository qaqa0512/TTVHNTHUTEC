@extends('admin')
@section('admin_content')
    <h3>Chúc  <?php
        $name = Session::get('admin_name');
        if($name)
        {
            echo $name;
        }
    ?> ngày mới tốt lành</h3>
@endsection
