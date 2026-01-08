<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブックマークアプリ</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- 装飾要素 -->
    <div class="decoration"></div>
    <div class="decoration"></div>

    <!-- ヘッダー -->
    <header class="header">
        <div class="nav-container">
            <a href="#" class="logo">
                <i class="fas fa-clipboard-list"></i>
                登録画面
            </a>
            <a href="select.php" class="nav-link">
                <i class="fas fa-list"></i>
                データ一覧
            </a>
        </div>
    </header>

    <!-- メインコンテンツ -->
    <main class="main-container form-page">
        <div class="form-card">
            <h1 class="form-title">ブックマーク登録</h1>
            <form method="post" action="insert.php">
                <div class="form-group">
                    <label for="name" class="form-label">
                        <i class="fas fa-user"></i> 書籍名
                    </label>
                    <input type="text" id="name" name="name" class="form-input" placeholder="例：はじめてのPHP" required>
                </div>

                <div class="form-group">
                    <label for="url" class="form-label">
                        <i class="fas fa-link"></i> URL
                    </label>
                    <input type="url" id="url" name="url" class="form-input" placeholder="例：https://example.com" required>
                </div>

                <div class="form-group">
                    <label for="comment" class="form-label">
                        <i class="fas fa-comment"></i> 感想
                    </label>
                    <textarea id="comment" name="comment" class="form-textarea" placeholder="気になった内容..." required></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i>
                    送信する
                </button>
            </form>
        </div>
    </main>
</body>

</html>