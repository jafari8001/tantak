<html>
    <head>
        <title>Docs login</title>
        <link href="{{ asset('vendor/auth/login.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> مشاهده مستندات </h2>       
        
            <!-- Login Form -->
            <form action="/docs/check" method="POST">
                @csrf
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="نام کاربری">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="رمز عبور">
                <input type="submit" class="fadeIn fourth" value="ورود">
            </form>
        
            <!-- Message -->
            @error('message')
            <div id="alertBox">
                {{ $message }}
            </div>
            @enderror
        
          </div>
        </div>
    </body>
</html>

