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
                                {if isset($articlewasedited)}
                                    <div>You edit Article</div>
                                {else}
                                    {if $articleisset == "no"}
                                        <div>Article not exist</div>
                                    {elseif $articleisset == "yes"}
                                        {foreach from=$actualearticle item=itemshow}
                                        <form action="" method="post">
                                            <input type="hidden" name="idarticle" value="{$smarty.get.articleid}">
                                            <div>
                                                <label class="labelcolor">Title:</Label>
                                                <input type="text" class="inputcolor" name="articletitle" value="{$itemshow.title}">
                                            </div>
                                            <div>
                                                <label class="labelcolor">Body:</Label>
                                                <input type="text" class="inputcolor"  name="articlebody" value="{$itemshow.body}">
                                            </div>
                                            <div>
                                                <label class="labelcolor">Status:</Label>
                                                <select name="articlestatus">
                                                    <option value="0" {if $itemshow.status == '0'}selected{/if}>Invisible</option>
                                                    <option value="1" {if $itemshow.status == '1'}selected{/if}>Visible</option>
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-center" style="margin-top: 20px; margin-bottom: 5px;">
                                                <button id="changesettings" name="timetoeditarticle" class="btn btn-primary">Edit Article</button>
                                            </div>
                                        </form>
                                        {/foreach}
                                    {/if}
                                {/if}
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