<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Galaxy</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="homepage">
    <div class="star-container"></div>
    <header class="header">
        <a href="{{ url('/home') }}"><img src="{{ asset('images/logo-removebg.png') }}" alt="Home" id="btnhome"></a>
        <nav>
            <a href="{{ url('/') }}"><button>Home</button></a>
            <a href="{{ url('/gamelist') }}"><button>Gamelist</button></a>
            <a href="{{ url('/support') }}"><button>Support</button></a>
        </nav>
        <a href="{{ url('/profile') }}"><img src="{{ asset('images/profielfoto.png') }}" alt="profile" id="btnprofiel"></a>
    </header>
    <div class="Home">
        <div class="vrienden">
            <h3>Vrienden</h3>
            <div class="friends">
                <div class="friend">
                    <span class="friend-status online"></span>
                    <a href="{{ url('/profile') }}" class="friend-link" data-status="online">Alice</a>
                </div>
                <div class="friend">
                    <span class="friend-status offline"></span>
                    <a href="{{ url('/profile') }}" class="friend-link" data-status="offline">Bob</a>
                </div>
                <div class="friend">
                    <span class="friend-status online"></span>
                    <a href="{{ url('/profile') }}" class="friend-link" data-status="online">Charlie</a>
                </div>
            </div>
        </div>
        <div class="community">
            <h3>Hier komen berichten van alle gamers</h3>
            <div class="posts">
                <form id="postForm" enctype="multipart/form-data">
                    <div class="form">
                        <label for="postContent">Tekst toevoegen:</label>
                        <textarea id="postContentText" name="postContentText" rows="4" cols="50"></textarea>
                        <label for="foto" class="custom-file-upload">Foto</label>
                        <input type="file" id="foto" name="postContent" accept="image/*">
                        <button id="submit" type="submit">Plaats</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="chats">
            <h3>Chats</h3>
            <div class="bericht">
                <div id="user-buttons">
                    <button class="user-button top-border" data-chat="Alice">Alice</button>
                    <button class="user-button" data-chat="Bob">Bob</button>
                    <button class="user-button" data-chat="Charlie">Charlie</button>
                </div>
                <div id="chat-box-container"></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/stars.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
<footer class="voet">
    <div class="links">
        <a href="{{ url('/') }}"><button>Home</button></a>
        <a href="{{ url('/gamelist') }}"><button>Gamelist</button></a>
        <a href="{{ url('/support') }}"><button>Support</button></a>
    </div>
    <div class="logo">
        <a href="{{ url('/') }}"><img src="{{ asset('images/logo-removebg.png') }}" alt="Home" id="btnhome"></a>
    </div>
    <div class="info">
        <a href="link naar pagina"><button>Mail</button></a>
        <a href="link naar pagina"><button>Telefoon</button></a>
        <a href="link naar pagina"><button>Instagram</button></a>
    </div>
    <script src="{{ asset('js/footer.js') }}"></script>
</footer>
</html>
