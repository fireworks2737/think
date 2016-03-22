<?php if (!defined('THINK_PATH')) exit();?>
<?php if($search == 1): ?><div class="result-wrap">
            <form action="/xx2/index.php/Admin/News/more_delete" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/xx2/index.php/Admin/News/insert" style="font-size:12px;color:black;"><i class="icon-font"></i>新增新闻</a>
                        <i class="icon-font"></i><input type="submit" value="批量删除" style="border:none;background:none;color:black;font-size:12px;"/>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%" >
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>内容</th>
                            <th>记者</th>
                            <th>更新时间</th>
                            <th>图片</th>
                            <th>操作</th>
                        </tr>
						<tbody id = "conte">
						<?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($v["id"]); ?>" type="checkbox"></td>
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["title"]); ?></td>
                            <td><?php echo ($v["content"]); ?></td>
                            <td><?php echo ($v["author"]); ?></td>
                            <td><?php echo (date("Y-m-d",$v["date"])); ?></td>
							<td>
                            <?php if(($v["img"] != '')): ?><img src="/xx2<?php echo ($v["img"]); ?>" width="100px" height="50px" /><?php endif; ?>
							</td>
                            <td>
                                <a class="link-update" href="/xx2/index.php/Admin/News/update/id/<?php echo ($v["id"]); ?>">修改</a>
                                <a class="link-del" href="/xx2/index.php/Admin/News/delete/id/<?php echo ($v["id"]); ?>" >删除</a>
                            </td>
                        </tr><?php endforeach; endif; ?>
						</tbody>
                    </table>
					<br />
                    <div class="green-black" id="paged"><?php echo ($page); ?></div>
                </div>
            </form>
        </div><?php endif; ?>
<?php if(empty($result)): ?>暂无搜索内容！<?php endif; ?>