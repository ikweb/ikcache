# IK CACHE
Form içeriğini önbelleğe kaydedilmesini sağlar.
Form içeriğini veri tabanına kaydetmeseniz bile içeriği 10 saniye de bir ön belleğe kaydeder.
Önbelleği ikcache.txt dosyasına kaydeder.
# Kullanım
```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="ikcache.js"></script>
<script>
$(document).ready(function(){
	$("#text").ikcache()
})
</script>
<form action="" method="post">
<textarea id="text"></textarea>
<input type="submit" value="Gönder" />
</form>
```
