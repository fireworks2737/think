<?php if (!defined('THINK_PATH')) exit();?>        <div class="result-wrap">
            <form action="/index.php/Admin/About/more_delete" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/index.php/Admin/About/insert" style="font-size:12px;color:black;"><i class="icon-font"></i>新增人员</a>
                        <i class="icon-font"></i><input type="submit" value="批量删除" style="border:none;background:none;color:black;font-size:12px;"/>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="62%" >
                        <tr>
                            <th class="tc" width="5%"></th>
                            <th width="5%">ID</th>
                            <th width="5%">名字</th>
                            <th>简介</th>
                            <th width="7%">图片</th>
                            <th width="8%">操作</th>
                        </tr>
						<tbody id = "conte">
						<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($v["id"]); ?>" type="checkbox"></td>
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["name"]); ?></td>
                            <td><?php echo ($v["jianjie"]); ?></td>
							<td>
							<img src="<?php echo ($v["photo"]); ?>" width="100px" height="100px" />
							</td>
                            <td>
                                <a class="link-update" href="/index.php/Admin/About/update/id/<?php echo ($v["id"]); ?>">修改</a>
                                <a class="link-del" href="/index.php/Admin/About/delete/id/<?php echo ($v["id"]); ?>" >删除</a>
                            </td>
                        </tr><?php endforeach; endif; ?>
						</tbody>
                    </table>
					<br />
                    <div class="green-black" id="paged"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>