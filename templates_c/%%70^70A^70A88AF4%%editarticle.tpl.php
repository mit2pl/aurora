<?php /* Smarty version 2.6.32, created on 2021-10-27 01:57:59
         compiled from editarticle.tpl */ ?>
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
                            <div class="card-header">Edit article</div>
                            <div class="card-body">
                                <?php if (isset ( $this->_tpl_vars['articlewasedited'] )): ?>
                                    <div>You edit Article</div>
                                <?php else: ?>
                                    <?php if ($this->_tpl_vars['articleisset'] == 'no'): ?>
                                        <div>Article not exist</div>
                                    <?php elseif ($this->_tpl_vars['articleisset'] == 'yes'): ?>
                                        <?php $_from = $this->_tpl_vars['actualearticle']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itemshow']):
?>
                                        <form action="" method="post">
                                            <input type="hidden" name="idarticle" value="<?php echo $_GET['articleid']; ?>
">
                                            <div>
                                                <label class="labelcolor">Title:</Label>
                                                <input type="text" class="inputcolor" name="articletitle" value="<?php echo $this->_tpl_vars['itemshow']['title']; ?>
">
                                            </div>
                                            <div>
                                                <label class="labelcolor">Body:</Label>
                                                <input type="text" class="inputcolor"  name="articlebody" value="<?php echo $this->_tpl_vars['itemshow']['body']; ?>
">
                                            </div>
                                            <div>
                                                <label class="labelcolor">Status:</Label>
                                                <select name="articlestatus">
                                                    <option value="0" <?php if ($this->_tpl_vars['itemshow']['status'] == '0'): ?>selected<?php endif; ?>>Invisible</option>
                                                    <option value="1" <?php if ($this->_tpl_vars['itemshow']['status'] == '1'): ?>selected<?php endif; ?>>Visible</option>
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-center" style="margin-top: 20px; margin-bottom: 5px;">
                                                <button id="changesettings" name="timetoeditarticle" class="btn btn-primary">Edit Article</button>
                                            </div>
                                        </form>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
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