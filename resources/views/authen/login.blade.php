<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{--  Font Awesome --}}
    <link rel="stylesheet" href="/fonts/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/fontawesome.min.css">

    {{--  Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;469;500;600;700&display=swap" rel="stylesheet">
    
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/authentication.css">
    
    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<body>
    {{-- Login --}}
    <div class="box">
        <div class="btn-return">
            <a href="/"><i class="fa fa-arrow-left"></i></a>
        </div>
        <div class="form-box">
            <div class="box-title">
                <h1><i class="fas fa-compact-disc"></i> Đăng Nhập</h1>
            </div>
            <!-- login -->
            <form id="login" class="input-group" method="POST" action="dangnhaptk">
                {{ csrf_field() }}
                @if (Session::has('message'))
                    <p class="message-txt"><i class="fas fa-info-circle"></i>{{Session::get('message')}}</p>
                @endif
                <input type="text" name="email" class="input-field" placeholder="Nhập email...">
                @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif 
                <input type="password" name="password" class="input-field" placeholder="Nhập mật khẩu...">
                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif 
                {{-- <input type="checkbox" class="check-box"><span id="txt">Hãy ghi nhớ tui!!</span> --}}
                <button class="submit-btn">Đăng Nhập</button>
                <a href="/dangki" id="title-box1">Chưa có tài khoản</a>                
            </form>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src=""></script>
</body>
</html>