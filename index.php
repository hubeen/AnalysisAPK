<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'/>
    <title>Analysis For ANDROID</title>
    <link type="text/css" href="./css/index.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="./js/filedrop.js"></script>
    <script type="text/javascript" src="./js/jquery.js"></script>
</head>
<body>
<header>
    <div class="logo">
        <img alt="APK_logo" src="./imgs/logo.png">
    </div>
</header>
<article id="basic">
    <fieldset id="zbasic">
        <legend>검사할 파일을 업로드해주세요</legend>
        <p>Drag&Drop 또는 클릭을 통해 업로드할 수 있습니다.</p>
    </fieldset>
    <script>
        var options = {iframe: {url: 'upload.php'}};
        var zone = new FileDrop('zbasic', options);

        zone.event('send', function (files) {
  files.each(function (file) {
      file.event('done', function (xhr) {
          alert("업로드가 완료되었습니다.\r\n검사 결과 페이지로 이동합니다.");
          location.replace("lib/analysis/vendor/tufanbarisyildirim/php-apk-parser/");
      //alert('Done uploading ' + this.name + ',' + ' response:\n\n' + xhr.responseText);
    
});

    file.event('error', function (e, xhr) {
      alert('Error uploading ' + this.name + ': ' +
          xhr.status + ', ' + xhr.statusText);
    
});

    file.sendTo('upload.php');
  
});

});


zone.event('iframeDone', function (xhr) {
  alert('Done uploading via <iframe>, response:\n\n' + xhr.responseText);

});


fd.addEvent(fd.byID('zbasicm'), 'change', function (e) {
  zone.multiple((e.currentTarget || e.srcElement).checked);

});
    </script>
</article>
</body>

</html>
