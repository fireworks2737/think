<?php if (!defined('THINK_PATH')) exit();?>        <div class="result-wrap">
            <form action="/index.php/Admin/News/more_delete" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/index.php/Admin/Admin/insert" style="font-size:12px;color:black;"><i class="icon-font"></i>新增管理员</a>
                        <i class="icon-font"></i><input type="submit" value="批量删除" style="border:none;background:none;color:black;font-size:12px;"/>
                    </div>
                </div>
                <div class="result-content" >
                    <table class="result-tab" width="82%" >
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>管理员邮箱</th>
                            <th>管理员密码</th>
                            <th>上次登录时间</th>
                            <th>操作</th>
                        </tr>
						<tbody id = "conte">
						<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($v["id"]); ?>" type="checkbox"></td>
							
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["email"]); ?></td>
                            <td><?php echo ($v["password"]); ?></td>
                            <td><?php echo (date("Y-m-d,H:i:s",$v["last_login_time"])); ?></td>
                            <td>
                                <a class="link-update" href="/index.php/Admin/Admin/update/id/<?php echo ($v["id"]); ?>">修改</a>
                                <a class="link-del" href="/index.php/Admin/Admin/delete/id/<?php echo ($v["id"]); ?>" >删除</a>
                            </td>
                        </tr><?php endforeach; endif; ?>
						</tbody>
                    </table>
					<br />
                    <div class="green-black" id="paged"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>