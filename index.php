<p>todoリスト</p>
<ul>
  <li>送信したものをそのまま表示</li>
  <li>セレクトボックスで選択したものを出した時にrpsの勝ち負けを判定</li>
</ul>

<?php echo "見えていますか？" ?>

<form action="sent.php" method="post">
  <input type="text" name="text">
  <input type="submit" value="送信">
</form>


<form action="sent.php" method="post">
  <select name="rps">
    <option value="未選択">選択してください</option>
    <option value=1>Rock</option>
    <option value=3>Paper</option>
    <option value=2>Scissors</option>
  </select>
  <input type="submit" value="送信">
</form>