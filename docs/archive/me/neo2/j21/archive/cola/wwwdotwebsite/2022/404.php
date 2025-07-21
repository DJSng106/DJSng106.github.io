<style>
h2 {text-align: center;}
body {text-align: center;}
h2 {
  font-size: 30px;
}
div.trel {
  position: relative;
  top: 50px;
}
</style>
<h2 style="font-family:cursive">YOU'VE BEEN TROLLED</h2>
 <audio id="audio" src="/trolled.mp3"></audio>
 <a href="#" id="play">
<p style="text-align:center;"><img src="/pic/a.png" alt=":trel:" width="300" height="150"></p>
</a>
<br>
<iframe width="280px" height="240px" src="/embed?v=1.mp4" frameborder="0" allowfullscreen></iframe>
<script>
document.getElementById('play').addEventListener('click', function (e) {
  e.preventDefault();
  document.getElementById('audio').play();
});
</script>
