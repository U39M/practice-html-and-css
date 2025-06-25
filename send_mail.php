<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>WCB Cafe - CONTACT</title>
        <meta name = "description" content = "ブレンドコーヒーとヘルシーなオーガニックフードを提供するカフェ">
        <link rel = "icon" type = "image/png" href = "images/favicon.png">
        <meta name = "viewport" content = "width = device-width, initial-scale=1">
        <mata property = "og:url" content = "http://example.com/index.html">
        <meta property = "og:type" content = "website">
        <meta property = "og:title" content = "WCB Cafe Home">
        <meta property = "og:description" content = "おしゃれなカフェで癒されてみませんか？無添加の食材で体の中からリフレッシュ。">
        <meta property = "og:image" content = "http://example.com/images/ogp.jpg">

        <!-- CSS -->
        <link rel = "stylesheet" href = "https://unpkg.com/ress/dist/ress.min.css">
        <link href = "https://fonts.googleapis.com/css?family=Philosopher" rel = "stylesheet">
        <link href = "css/style.css" rel = "stylesheet">
    </head>

    <body>
        <div id = "contact" class = "big-bg">
            <!-- ヘッダー -->
            <header class = "page-header wrapper">
                <h1><a href = "index.html"><img class = "logo" src = "images/logo.svg" alt = "WCBカフェホーム"></a></h1>
                <nav>
                    <ul class = "main-nav">
                        <li><a href = "news.html">News</a></li>
                        <li><a href = "menu.html">Menu</a></li>
                        <li><a href = "contact.html">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <div class = "send-mail-wrapper">
                    <?php
                            mb_language("ja");
                            mb_internal_encoding("UTF-8");

                            $your_name = htmlspecialchars($_POST["your-name"]);
                            $your_email = htmlspecialchars($_POST["your-email"]);
                            $your_message = htmlspecialchars($_POST["your-message"]);

                            $to = "";
                            $subject = "お問い合わせ";
                            $name = mb_encode_mimeheader("$your_name");
                            $headers = "From:".$name."<$your_email>\n";
                            $message = $your_message;
                            
                            $flg_send_meil =  mb_send_mail($to, $subject, $message, $headers);
                            if($flg_send_meil){
                                print("<p class = 'send-mail'>以下の内容でお問い合わせを承りました<br>名前：".$your_name."<br>メールアドレス:".$your_email."<br>メッセージ:".$your_message."</p>");
                                print("<a class = 'button' href = 'contact.html'>戻る</a>");
                            }else{
                                print("<p>送信に失敗しました<br>再度入力をし直してください</p>");
                            }
                    ?>
            </div><!-- /.send-mail-wrapper -->
        </div><!-- /#contact -->

        <!-- フッター -->
        <footer>
            <div class = "wrapper">
                <p><small>&copy; 2025 YusakuMatsuo</small></p>
            </div>
        </footer>
    </body>
</html>