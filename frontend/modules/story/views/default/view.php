<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 17-5-10
 * Time: 下午5:30
 */
$this->title = $story->title;
?>

<div class="row">
    <div class="col-md-9">
        <div class="article-detail">
            <div class="article-top">
                <div class="article-title"><h3><?= $story->title ?></h3></div>
                <div class="article-tag">
                    <span class="glyphicon glyphicon-calendar"></span>
                    发布日期： <?= date("Y-m-d H:i:s", $story->created_at) ?>
                    <span class="glyphicon glyphicon-list" style="margin-left:15px;"></span>
                    分类：
                    <a href="/category/other.html">其他</a>
                    <span class="glyphicon glyphicon-eye-open" style="margin-left:15px;"></span>
                    热度：
                    181℃
                    <span class="glyphicon glyphicon-tags" style="margin-left:15px;"></span>
                    标签：
                    <a href="/tag/117.html"><span class="label label-default label-fix">dns</span></a>
                </div>
                <div class="article-notice">
                    <p><span class="glyphicon glyphicon-pushpin"></span>&nbsp;提示：转载请注明原文链接</p>
                    <p><span class="glyphicon glyphicon-pushpin"></span>
                        本文永久链接：
                        <?=\yii\helpers\Html::a(Yii::$app->request->absoluteUrl, Yii::$app->request->absoluteUrl) ?>
                    </p>
                </div>
            </div>
            <div class="articlt-boby"><?= $story->content ?></div>
        </div>

        <div class="panel panel-default guestbook">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-pencil"></span>&nbsp;评论
            </div>
            <div class="panel-body">
                <div class="comment-list">
                </div>
                <div class="row">
                    <form id="comment-form" action="/article/comment.html" method="post">
                        <input type="hidden" name="pid" value="53">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon">昵称</span>
                                        <input type="text" class="form-control" name="username" placeholder="必填"
                                               style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon">邮箱</span>
                                        <input type="text" class="form-control" name="email" placeholder="必填">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon">网址</span>
                                        <input type="text" class="form-control" name="siteurl" placeholder="非必填">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="commentform-content" class="form-control" name="conent"
                                          rows="5"></textarea>
                            </div>
                            <div class="notice">最多500个字符</div>
                            <div class="error-summary" style="display:none"><p>请修复以下错误</p>
                                <ul></ul>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-default" data-loading-text="提交中...">发表</button>
                                <button type="reset" class="btn btn-default">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 visible-lg-block">
        <div id="article-sidebar" class="article-sidebar affix-top">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-fire"></span>&nbsp;同类热门
                </div>
                <div class="panel-body">
                    <ul class="sidebar-ul">
                        <li class="sidebar-li"><a href="/article/31.html" title="跨域请求方案 - CORS">跨域请求方案 - CORS</a></li>
                        <li class="sidebar-li"><a href="/article/41.html" title="防御CSRF攻击的一般方法">防御CSRF攻击的一般方法</a></li>
                        <li class="sidebar-li"><a href="/article/21.html" title="REST和认证 HMAC">REST和认证 HMAC</a></li>
                        <li class="sidebar-li"><a href="/article/40.html" title="防御XSS的一般方法">防御XSS的一般方法</a></li>
                        <li class="sidebar-li"><a href="/article/30.html" title="Apache配置优化">Apache配置优化</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-random"></span>&nbsp;随机推荐
                </div>
                <div class="panel-body">
                    <ul class="sidebar-ul">
                        <li class="sidebar-li"><a href="/article/51.html" title="Docker部署笔记">Docker部署笔记</a></li>
                        <li class="sidebar-li"><a href="/article/52.html" title="从理论到实践，全方位认识DNS（理论篇）">从理论到实践，全方位认识DNS（理论篇）</a>
                        </li>
                        <li class="sidebar-li"><a href="/article/24.html" title="Git的配置">Git的配置</a></li>
                        <li class="sidebar-li"><a href="/article/21.html" title="REST和认证 HMAC">REST和认证 HMAC</a></li>
                        <li class="sidebar-li"><a href="/article/40.html" title="防御XSS的一般方法">防御XSS的一般方法</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>