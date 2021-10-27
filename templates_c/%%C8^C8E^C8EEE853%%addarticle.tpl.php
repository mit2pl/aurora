<?php /* Smarty version 2.6.32, created on 2021-10-27 02:00:36
         compiled from addarticle.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body id="body">
<div id="inside">
    <div id="topmenu">
        <div id="showtopmenu">
            <p class="topmenus"><a class="a" href="index.php?action=addarticle">Add article</a> <a class="a" href="index.php?action=">Show all article</a></p>
        </div>
    </div>
    <div id="restbody">
        <div id="articleposition">
                <div class="container dark" style="margin-top: 20px">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Add article</div>
                                <div class="card-body">
                                    <?php if (isset ( $this->_tpl_vars['articlewasadd'] )): ?>
                                        <div>Your Article was added</div>
                                        <?php else: ?>
                                    <form action="" method="post">
                                        <div>
                                            <label class="labelcolor">Title:</Label>
                                            <input type="text" class="inputcolor" name="articletitle" value="">
                                        </div>
                                        <div>
                                            <label class="labelcolor">Body:</Label>
                                            <input type="text" class="inputcolor"  name="articlebody" value="">
                                        </div>
                                        <div>
                                            <label class="labelcolor">Status:</Label>
                                            <select name="articlestatus">
                                                <option value="1">Visible</option>
                                                <option value="0">Invisible</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-center" style="margin-top: 20px; margin-bottom: 5px;">
                                            <button id="changesettings" class="btn btn-primary">Add Article</button>
                                        </div>
                                    </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>