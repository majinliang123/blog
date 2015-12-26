
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                   
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info"><?php echo $_SERVER['SERVER_SOFTWARE'] ?></span>
                    </li>
                    <li>
                        <label class="res-lab">PHP版本</label><span class="res-info"><?php echo PHP_VERSION ?></span>
                    </li>
                    <li>
                        <label class="res-lab">数据库信息</label><span class="res-info"><?php echo mysql_get_client_info() ?></span>
                    </li>
                    <li>
                        <label class="res-lab">客户端IP</label><span class="res-info"><?php echo Yii::app()->request->userHostAddress ?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器IP</label><span class="res-info"><?php echo $_SERVER['SERVER_ADDR'] ?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">QQ ：</label><span class="res-info"><a class="qq-link" target="_blank" href="tencent://message?uin=1119338405"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="JS-前端开发" title="JS-前端开发"></a> </span>
                    </li>
                </ul>
            </div>
        </div>
    