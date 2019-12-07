<?php
$content = dataForPage($_GET['page']);
$blog = dataForBlog($_GET['page']);

// выводим содержание страницы
echo $content['content'];

// если страница явсляется блогом, то выводим список статей
if($content['blog'])
{
    foreach ($blog as $article)
    {

        $article_content = substr($article['content'],0,1000);
        $article_content = trim_to_dot($article_content);
        ?>

        <div id="article" class="row">
            <div class="col-md-4"><?php
                if(!empty($article['img']))
                {
                    echo "<img width='400px' src=\"img/{$article['img']}\">";
                }
                ?>

            </div>
            <div class="col-md-8" id="article" >
                <h1><?=$article['name']?></h1>

                <p><?=$article_content?></p>
                <div class="row">
                    <div id="article" class="col-md-4"><a href="?page=read_article&articleid=<?=$article['id']?>">далее</a></div>
                    <div class="col-md-4 col-md-offset-4"><p class="article_date"><span class="glyphicon glyphicon-user"> <?=$article['author'] ?></span> <span class="glyphicon glyphicon-time"> <?=date("d.m.Y",$article['created'] )?></span></p></div>
                </div>
            </div>


        </div>
        <?php
    }
}

if ($_GET['page'] == "read_article")
{
    $full_article = receiveAticle($_GET['articleid']);
    ?>
    <div id="article" class="row">
        <div class="col-md-4"><?php
            if(!empty($full_article['img']))
            {
                echo "<img width='400px' src=\"img/{$full_article['img']}\">";
            }
            ?>

        </div>
        <div class="col-md-8" id="article" >
            <h1><?=$full_article['name']?></h1>
            <div class="row">
                <div class="col-md-4 col-md-offset-4"><p class="article_date"><span class="glyphicon glyphicon-user"> <?=$full_article['author'] ?></span> <span class="glyphicon glyphicon-time"> <?=date("d.m.Y",$full_article['created'] )?></span></p></div>
            </div>



        </div>


    </div>
    <div class="row" id="article">
        <div class="col-md-12">
            <p class="article_page_text"><?=$full_article['content']?></p>
        </div>
    </div>

    <?php

}
