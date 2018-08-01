<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html" charset="utf-8">
        <title>上传文件</title>
        <script src="../uploadify/jquery-1.8.0.js"></script>
        <script src="../uploadify/jquery.uploadify.js"></script>
        <script src="../uploadify/jquery.uploadify.min.js"></script>
        <link rel="stylesheet" type="text/css"  href="../uploadify/uploadify.css">
        <style>
            body {
                font: 13px Arial, Helvetica, Sans-serif;
            }
            .haha{
                color:#FFFFFF;
            }
            #queue {
                background-color: #FFF;
                border-radius: 3px;
                box-shadow: 0 1px 3px rgba(0,0,0,0.25);
                height: 103px;
                margin-bottom: 10px;
                overflow: auto;
                padding: 5px 10px;
                width: 300px;
            }
        </style>
    </head>
<body>
    <form>
        <div id="queue"></div>
        <input type="file" id = "file" name="file" multiple="true">
    </form>
    <script>
        $(function(){
            $("#file").uploadify({
                'debug':false,
                'auto':true,
                'buttonClass':'haha',
                'buttonText':'上传图片',
                'height':30,
                'width':100,
                'checkExsiting':'check_exist.php'//是否检测图片是否存在,不检测:false
                'fileObjName':'file'//默认filedata,$_FILES控件名称
                'fileSizeLimit':'5120kb',
                'fileTypeDesc':'All Files'//图片选择描述
                'fileTypeExts':'*.gif;*.jpg;*.png',
                'formData':{'someKey':'someValue','someOtherKey':1},//传输数据,json格式
                ''


            });
        });
    </script>

</body>
</html>