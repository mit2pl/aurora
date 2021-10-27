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
                {if isset($articleisset)}
                    {if $articleisset == "yes"}
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
                    {elseif $articleisset == "no"}
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
                    {/if}
                    {else}
                    {foreach from=$showart item=arr}
                        <div class="container" style="margin-top: 20px">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{$arr.title}</div>
                                    <div class="card-body">
                                        {$arr.body}
                                    </div>
                                    <div style="margin-top: -15px; text-align: right; padding-right: 3.60rem; margin-bottom: 5px;">
                                        <div style="margin-top: 20px; margin-bottom: 5px;">
                                            <form action="?action=editarticle&articleid={$arr.id}" method="post">
                                                <button name="editarticle" class="btn btn-primary">Edit Article</button>
                                                <input type="hidden" name="idarticle" value="{$arr.id}">
                                            </form>
                                            <form action="" method="post">
                                                <input type="hidden" name="idarticle" value="{$arr.id}">
                                                <button name="deletearticle" class="btn btn-primary">Delete Article</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    {foreachelse}
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
                    {/foreach}
                {/if}
            </div>
        </div>
    </div>
</body>
</html>