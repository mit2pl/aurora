<?php /* Smarty version 2.6.32, created on 2021-10-27 02:01:40
         compiled from showallarticle.tpl */ ?>
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
                <?php if (isset ( $this->_tpl_vars['articleisset'] )): ?>
                    <?php if ($this->_tpl_vars['articleisset'] == 'yes'): ?>
                        <div class="container" style="margin-top: 20px">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">Article was delete</div>
                                        <div class="card-body">
                                            Your article was delete
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($this->_tpl_vars['articleisset'] == 'no'): ?>
                        <div class="container" style="margin-top: 20px">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">No articles</div>
                                        <div class="card-body">
                                            You can't delete this article because is no exist
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php else: ?>
                    <?php $_from = $this->_tpl_vars['showart']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arr']):
?>
                        <div class="container" style="margin-top: 20px">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header"><?php echo $this->_tpl_vars['arr']['title']; ?>
</div>
                                    <div class="card-body">
                                        <?php echo $this->_tpl_vars['arr']['body']; ?>

                                    </div>
                                    <div style="margin-top: -15px; text-align: right; padding-right: 3.60rem; margin-bottom: 5px;">
                                        <div style="margin-top: 20px; margin-bottom: 5px;">
                                            <form action="?action=editarticle&articleid=<?php echo $this->_tpl_vars['arr']['id']; ?>
" method="post">
                                                <button name="editarticle" class="btn btn-primary">Edit Article</button>
                                                <input type="hidden" name="idarticle" value="<?php echo $this->_tpl_vars['arr']['id']; ?>
">
                                            </form>
                                            <form action="" method="post">
                                                <input type="hidden" name="idarticle" value="<?php echo $this->_tpl_vars['arr']['id']; ?>
">
                                                <button name="deletearticle" class="btn btn-primary">Delete Article</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php endforeach; else: ?>
                        <div class="container" style="margin-top: 20px">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">No articles</div>
                                        <div class="card-body">
                                            No articles
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; unset($_from); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>