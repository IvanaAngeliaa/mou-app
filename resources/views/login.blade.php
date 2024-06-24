<html>
    <head>
        <title>Mou Login</title>
        <link rel="stylesheet" href="css/login-style.css">
    </head>
        <body>
            <div class="container">
                <form action="{{route('login_proses')}}" method="post">
                    @csrf
                    <p style="font-size:24px; font-weight:650; text-align:center; margin-bottom:20px;">Login</p>
                        <table>
                            <tr> 
                                <td>Username <br><br>
                                <input type="text" name="username" id="username" class="text-input" required></td>    
                            </tr>
                            <tr>
                                <td>Password <br><br>
                                <input type="password" name="password" id="password" class="text-input" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" id="btn">
                                <input type="submit" value="Login" class="button" style="cursor:pointer";>
                                </td>
                            </tr>
                        </table>
                </form>
                <a href="{{route('index')}}"><input type="submit" value="Back to Website" class="button" style="cursor:pointer";></a>
            </div>
        </body>
</html>
