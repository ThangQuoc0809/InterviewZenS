<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth">
    <title>Joke Day</title>
    <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}">
</head>
<body>
<div class="main">
    <div class="header">
        <div class="nav">
            <div class="logo">
                <img class="img-logo" src="{{asset('./assets/img/logo-1.png')}}" alt="">
            </div>
            <div class="account">
                <div class="ctn-account">
                    <i>Handicrafted by</i> <br>
                    <b>Jim HLS</b>
                </div>
                <div class="ctn-img">
                    <img class="img-logo" src="{{asset('./assets/img/logo-2.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="title">
        <div class="title-header">
            <h1>A joke a day keeps the doctor away</h1>
            <h5>If you joke wrong way, your teeth have to pay. (Serious)</h5>
        </div>
    </div>
    <div class="content">
        <div class="content-body">
            <p>
                {{$vote->joke ?? 'That\'s all the jokes for today! Come back another day!'}}
            </p>
        </div>
        <div class="vote">
            @isset($vote)
            <form action="{{route('vote-joke')}}" method="POST">
                @csrf
                <input type="hidden" name="class" value="{{$vote->id}}">
                <input type="hidden" name="type" value="like">
                <button type="submit" class="btn-vote btn-vote-left" >This is Funny!</button>
            </form>
            <form action="{{route('vote-joke')}}" method="POST">
                @csrf
                <input type="hidden" name="class" value="{{$vote->id}}">
                <input type="hidden" name="type" value="dislike">
                <button type="submit" class="btn-vote btn-vote-right">This is not Funny.</button>
            </form>
            @endisset
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            <p>This website is created as part of Hlsolutions program.
                The materials contained on this website are provclassed for general information only and do not constitute any form of advice.
                HLS assumes no responsibility for the accuracy of any particular statement accepts no liability for any loss or damage
                which may arise form reliance on the information contained on this site.</p>
        </div>
        <div class="copyright">
            <p><b>Copyright 2021 HLS</b></p>
        </div>
    </div>
</div>
</body>
</html>
